<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StorePolicyAndToRequest;
use App\Http\Requests\UpdatePolicyAndToRequest;
use App\Models\PolicyAndTo;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class PolicyAndTosController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('policy_and_to_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $policyAndTos = PolicyAndTo::all();

        return view('admin.policyAndTos.index', compact('policyAndTos'));
    }

    public function create()
    {
        abort_if(Gate::denies('policy_and_to_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.policyAndTos.create');
    }

    public function store(StorePolicyAndToRequest $request)
    {
        $policyAndTo = PolicyAndTo::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $policyAndTo->id]);
        }

        return redirect()->route('admin.policy-and-tos.index');
    }

    public function edit(PolicyAndTo $policyAndTo)
    {
        abort_if(Gate::denies('policy_and_to_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.policyAndTos.edit', compact('policyAndTo'));
    }

    public function update(UpdatePolicyAndToRequest $request, PolicyAndTo $policyAndTo)
    {
        $policyAndTo->update($request->all());

        return redirect()->route('admin.policy-and-tos.index');
    }

    public function show(PolicyAndTo $policyAndTo)
    {
        abort_if(Gate::denies('policy_and_to_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.policyAndTos.show', compact('policyAndTo'));
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('policy_and_to_create') && Gate::denies('policy_and_to_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new PolicyAndTo();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
