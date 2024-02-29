<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StorePolicyAndTosRequest;
use App\Http\Requests\UpdatePolicyAndTosRequest;
use App\Models\PolicyAndTos;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class PolicyAndTosController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('policy_and_tos_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $policyAndTos = PolicyAndTos::all();

        return view('admin.policyAndTos.index', compact('policyAndTos'));
    }

    public function create()
    {
        abort_if(Gate::denies('policy_and_tos_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.policyAndTos.create');
    }

    public function store(StorePolicyAndTosRequest $request)
    {
        $policyAndTos = PolicyAndTos::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $policyAndTos->id]);
        }

        return redirect()->route('admin.policy-and-tos.index');
    }

    public function edit(PolicyAndTos $policyAndTos)
    {
        abort_if(Gate::denies('policy_and_tos_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.policyAndTos.edit', compact('policyAndTos'));
    }

    public function update(UpdatePolicyAndTosRequest $request, PolicyAndTos $policyAndTos)
    {
        $policyAndTos->update($request->all());

        return redirect()->route('admin.policy-and-tos.index');
    }

    public function show(PolicyAndTos $policyAndTos)
    {
        abort_if(Gate::denies('policy_and_tos_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.policyAndTos.show', compact('policyAndTos'));
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('policy_and_tos_create') && Gate::denies('policy_and_tos_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new PolicyAndTos();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
