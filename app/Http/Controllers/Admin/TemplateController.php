<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreTemplateRequest;
use App\Http\Requests\UpdateTemplateRequest;
use App\Models\Template;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class TemplateController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $templates = Template::with(['media'])->get();

        return view('admin.templates.index', compact('templates'));
    }

    public function create()
    {
        abort_if(Gate::denies('template_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.templates.create');
    }

    public function store(StoreTemplateRequest $request)
    {
        $template = Template::create($request->all());

        if ($request->input('preview_image', false)) {
            $template->addMedia(storage_path('tmp/uploads/' . basename($request->input('preview_image'))))->toMediaCollection('preview_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $template->id]);
        }

        return redirect()->route('admin.templates.index');
    }

    public function edit(Template $template)
    {
        abort_if(Gate::denies('template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.templates.edit', compact('template'));
    }

    public function update(UpdateTemplateRequest $request, Template $template)
    {
        $template->update($request->all());

        if ($request->input('preview_image', false)) {
            if (!$template->preview_image || $request->input('preview_image') !== $template->preview_image->file_name) {
                if ($template->preview_image) {
                    $template->preview_image->delete();
                }
                $template->addMedia(storage_path('tmp/uploads/' . basename($request->input('preview_image'))))->toMediaCollection('preview_image');
            }
        } elseif ($template->preview_image) {
            $template->preview_image->delete();
        }

        return redirect()->route('admin.templates.index');
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('template_create') && Gate::denies('template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Template();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
