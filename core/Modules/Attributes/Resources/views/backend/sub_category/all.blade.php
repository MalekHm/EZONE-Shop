@extends('backend.admin-master')
@section('site-title')
    {{ __('Product Category') }}
@endsection
@section('style')
    <x-media.css />
    <x-datatable.css />
    <x-bulk-action.css />
@endsection

@php
    $statuses = \App\Status::all();
@endphp

@section('content')
    <div class="col-lg-12 col-ml-12">
        <x-msg.error />
        <x-msg.flash />
        <div class="row">
            <div class="col-lg-12 mt-2">
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h3 class="dashboard__card__title">{{ __('All Sub Categories') }}</h3>
                        <div class="dashboard__card__header__right">
                            @can('sub-categories-delete')
                                <x-bulk-action.dropdown />
                            @endcan
                            @can('sub-categories-new')
                                <a href="#1" data-bs-toggle="modal" data-bs-target="#category_create_modal"
                                    class="cmn_btn btn_bg_profile">{{ __('New Sub Category') }}</a>
                            @endcan
                        </div>
                    </div>
                    <div class="dashboard__card__body mt-4">
                        <div class="table-wrap table-responsive">
                            <table class="table table-default">
                                <thead>
                                    <x-bulk-action.th />
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </thead>
                                <tbody>

                                    @foreach ($all_sub_category as $category)
                                        <tr>
                                            @can('sub-categories-bulk-action')
                                                <x-bulk-action.td :id="$category->id" />
                                            @endcan
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <div class="attachment-preview">
                                                    <div class="img-wrap">
                                                        {!! \App\Http\Services\Media::render_image($category->image) !!}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <x-status-span :status="$category->status?->name" />
                                            </td>
                                            <td>
                                                @can('sub-categories-delete')
                                                    <x-table.btn.swal.delete :route="route('admin.subcategory.delete', $category->id)" />
                                                @endcan

                                                @can('sub-categories-update')
                                                    <a href="#1" data-bs-toggle="modal"
                                                        data-bs-target="#category_edit_modal"
                                                        class="btn btn-sm btn-primary btn-xs mb-2 me-1 category_edit_btn"
                                                        data-id="{{ $category->id }}"
                                                        data-category="{{ $category->category?->id }}"
                                                        data-name="{{ $category->name }}"
                                                        data-status="{{ $category->status_id }}"
                                                        data-slug="{{ $category->slug }}"
                                                        data-description="{{ $category->description }}"
                                                        data-imageid="{{ $category->image }}"
                                                        data-image="{{ \App\Http\Services\Media::render_image($category->image, render_type: 'path') }}">
                                                        <i class="ti-pencil"></i>
                                                    </a>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="sub-category-pagination">{{ $all_sub_category->links() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @can('sub-categories-update')
        <div class="modal fade" id="category_edit_modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content custom__form">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ __('Update Sub Category') }}</h5>
                        <button type="button" class="close" data-bs-dismiss="modal"><span>×</span></button>
                    </div>
                    <form action="{{ route('admin.subcategory.update') }}" method="post">
                        <input type="hidden" name="id" id="sub_category_id">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="edit_name">{{ __('Name') }}</label>
                                <input type="text" class="form-control" id="edit_name" name="name"
                                    placeholder="{{ __('Name') }}">
                            </div>

                            <div class="form-group">
                                <label for="edit_slug">{{ __('Slug') }}</label>
                                <input type="text" class="form-control" id="edit_slug" name="slug"
                                    placeholder="{{ __('Slug') }}">
                            </div>

                            <div class="form-group edit-category-wrapper">
                                <label for="name">{{ __('Category') }}</label>
                                <select type="text" class="form-control" id="category_id" name="category_id">
                                    <option value="">{{ __("Select Category") }}</option>
                                    @foreach ($all_category as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="edit_description">{{ __('Description') }}</label>
                                <textarea type="text" class="form-control" id="edit_description" name="description"
                                    placeholder="{{ __('Description') }}"></textarea>
                            </div>

                            <x-media-upload :title="__('Image')" name="image_id" :dimentions="'200x200'" />
                            
                            <div class="form-group edit-status-wrapper">
                                <label for="edit_status">{{ __('Status') }}</label>
                                <select name="status_id" class="form-control" id="edit_status">
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">{{ __('Close') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Save Change') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endcan

    @can('sub-categories-new')
        <div class="modal fade" id="category_create_modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content custom__form">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ __('Create Sub Category') }}</h5>
                        <button type="button" class="close" data-bs-dismiss="modal"><span>×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.subcategory.new') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" class="form-control" id="create-name" name="name"
                                    placeholder="{{ __('Name') }}">
                            </div>

                            <div class="form-group">
                                <label for="slug">{{ __('Slug') }}</label>
                                <input type="text" class="form-control" id="create-slug" name="slug"
                                    placeholder="{{ __('Slug') }}">
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('Category') }}</label>
                                <select type="text" class="form-control" id="create_category_id" name="category_id">
                                    <option value="">Select Category</option>
                                    @foreach ($all_category as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">{{ __('Description') }}</label>
                                <textarea type="text" class="form-control" id="description" name="description"
                                    placeholder="{{ __('Description') }}"></textarea>
                            </div>

                            <x-media-upload :title="__('Image')" :name="'image_id'" :dimentions="'200x200'" />

                            <div class="form-group">
                                <label for="status">{{ __('Status') }}</label>
                                <select name="status_id" class="form-control" id="status">
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="cmn_btn btn_bg_profile">{{ __('Add New') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endcan
    <div class="body-overlay-desktop"></div>
    <x-media.markup />
@endsection
@section('script')
    <x-media.js />
    <x-table.btn.swal.js />
    @can('sub-categories-bulk-action')
        <x-bulk-action.js :route="route('admin.subcategory.bulk.action')" />
    @endcan

    <script>
        $(document).ready(function() {
            $(document).on('click', '.category_edit_btn', function() {
                let el = $(this);
                let id = el.data('id');
                let name = el.data('name');
                let slug = el.data('slug');
                let description = el.data('description');
                let category = el.data("category");

                let status = el.data('status');
                let modal = $('#category_edit_modal');

                modal.find('#sub_category_id').val(id);
                modal.find('#category_id').val(category);
                modal.find('#edit_status option[value="' + status + '"]').attr('selected', true);
                modal.find('#edit_name').val(name);
                modal.find('#edit_slug').val(slug);
                modal.find('#edit_description').val(description);
                modal.find(".edit-status-wrapper .list li[data-value='" + status + "']").trigger("click");
                modal.find(".edit-category-wrapper .list li[data-value='" + category + "']").trigger(
                    "click");
                modal.find(".modal-footer").trigger("click");

                let image = el.data('image');
                let imageid = el.data('imageid');

                if (imageid != '') {
                    modal.find('.media-upload-btn-wrapper .img-wrap').html(
                        '<div class="attachment-preview">' +
                            '<div class="thumbnail">' +
                                '<div class="centered">' +
                                    '<img class="avatar user-thumb" src="' + image + '" > ' +
                                '</div>' +
                            '</div>' +
                        '</div>'
                    );

                    modal.find('.media-upload-btn-wrapper input').val(imageid);
                    modal.find('.media-upload-btn-wrapper .media_upload_form_btn').text('{{ __("Change Image") }}');
                }

            });

            $('#create-name , #create-slug').on('keyup', function() {
                let title_text = $(this).val();
                $('#create-slug').val(convertToSlug(title_text))
            });

            $('#edit_name , #edit_slug').on('keyup', function() {
                let title_text = $(this).val();
                $('#edit_slug').val(convertToSlug(title_text))
            });
        });
    </script>
@endsection
