<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Ticket Details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/dropzone.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/media-uploader.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/summernote-bs4.css')); ?>">
    <style>
        span.low,
        span.status-open {
            display: inline-block;
            background-color: #6bb17b;
            padding: 3px 10px;
            border-radius: 4px;
            color: #fff;
            text-transform: capitalize;
            border: none;
            font-weight: 600;
            font-size: 10px;
            margin: 3px;
        }

        span.high,
        span.status-close {
            display: inline-block;
            background-color: #c66060;
            padding: 3px 10px;
            border-radius: 4px;
            color: #fff;
            text-transform: capitalize;
            border: none;
            font-weight: 600;
            font-size: 10px;
            margin: 3px;
        }

        span.medium {
            display: inline-block;
            background-color: #70b9ae;
            padding: 3px 10px;
            border-radius: 4px;
            color: #fff;
            text-transform: capitalize;
            border: none;
            font-weight: 600;
            ,
            font-size: 10px;
            margin: 3px;
        }

        span.urgent {
            display: inline-block;
            background-color: #bfb55a;
            padding: 3px 10px;
            border-radius: 4px;
            color: #fff;
            text-transform: capitalize;
            border: none;
            font-weight: 600;
            font-size: 10px;
            margin: 3px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="dashboard__card">
                    <div class="dashboard__card__header">
                        <h4 class="dashboard__card__title"><?php echo e(__('Support Ticket Details')); ?></h4>
                        <a class="cmn_btn btn_bg_profile"
                            href="<?php echo e(route('admin.support.ticket.all')); ?>"><?php echo e(__('All Tickets')); ?></a>
                    </div>
                    <div class="dashboard__card__body mt-4">
                        <div class="gig-chat-message-heading">
                            <div class="gig-order-info">
                                <ul>
                                    <li><strong><?php echo e(__('Ticket ID:')); ?></strong> #<?php echo e($ticket_details->id); ?></li>
                                    <li><strong><?php echo e(__('Title:')); ?></strong> <?php echo e($ticket_details->title); ?></li>
                                    <li><strong><?php echo e(__('Subject:')); ?></strong> <?php echo e($ticket_details->subject); ?></li>
                                    <li><strong><?php echo e(__('Description:')); ?></strong> <?php echo e($ticket_details->description); ?></li>
                                    <li><strong><?php echo e(__('Status:')); ?></strong> <span
                                            class="status-<?php echo e($ticket_details->status); ?>"><?php echo e($ticket_details->status); ?></span>
                                    </li>
                                    <li><strong><?php echo e(__('Priority:')); ?></strong> <span
                                            class="<?php echo e($ticket_details->priority); ?>"><?php echo e($ticket_details->priority); ?></span>
                                    </li>
                                    <li><strong><?php echo e(__('User:')); ?></strong>
                                        <?php echo e($ticket_details->user->name ?? __('anonymous')); ?></li>
                                    <li><strong><?php echo e(__('Department:')); ?></strong>
                                        <?php echo e($ticket_details->department->name ?? __('anonymous')); ?></li>
                                    <?php if($ticket_details->admin_id): ?>
                                        <li><strong><?php echo e(__('Admin:')); ?></strong>
                                            <?php echo e($ticket_details->admin->name ?? __('anonymous')); ?></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="gig-message-start-wrap">
                                <h2 class="dashboard__card__title mb-3"><?php echo e(__('All Conversation')); ?></h2>
                                <div class="all-message-wrap <?php if($q == 'all'): ?> msg-row-reverse <?php endif; ?>">
                                    <?php if($q == 'all' && count($all_messages) > 1): ?>
                                        <form action="" method="get">
                                            <input type="hidden" value="all" name="q">
                                            <button class="load_all_conversation"
                                                type="submit"><?php echo e(__('load all message')); ?></button>
                                        </form>
                                    <?php endif; ?>
                                    <?php $__empty_1 = true; $__currentLoopData = $all_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="single-message-item <?php if($msg->user_type == 'customer'): ?> customer <?php endif; ?>">
                                            <div class="top-part">
                                                <div class="thumb">
                                                    <span class="title">
                                                        <?php if($msg->user_type == 'customer'): ?>
                                                            <?php echo e(substr($ticket_details->user->name ?? 'U', 0, 1)); ?>

                                                        <?php else: ?>
                                                            <?php echo e(substr($ticket_details->admin->name ?? 'A', 0, 1)); ?>

                                                        <?php endif; ?>
                                                    </span>
                                                    <?php if($msg->notify == 'on'): ?>
                                                        <i class="fas fa-envelope mt-2"
                                                            title="<?php echo e(__('Notified by email')); ?>"></i>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="content">
                                                    <h6 class="title">
                                                        <?php if($msg->user_type == 'customer'): ?>
                                                            <?php echo e($ticket_details->user->name ?? 'U'); ?>

                                                        <?php else: ?>
                                                            <?php echo e($ticket_details->admin->name ?? 'A'); ?>

                                                        <?php endif; ?>
                                                    </h6>
                                                    <span class="time"><?php echo e(date_format($msg->created_at, 'd M Y H:i:s')); ?>

                                                        | <?php echo e($msg->created_at->diffForHumans()); ?></span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="message-content">
                                                    <?php echo $msg->message; ?>

                                                </div>
                                                <?php if(file_exists('assets/uploads/ticket/' . $msg->attachment)): ?>
                                                    <a href="<?php echo e(asset('assets/uploads/ticket/' . $msg->attachment)); ?>"
                                                        download class="anchor-btn"><?php echo e($msg->attachment); ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <p class="alert alert-warning"><?php echo e(__('no message found')); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('support-ticket-send-message')): ?>
                                <div class="reply-message-wrap custom__form">
                                    <h5 class="dashboard__card__title mb-3"><?php echo e(__('Replay To Message')); ?></h5>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.msg.flash','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('msg.flash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.msg.error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('msg.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <form action="<?php echo e(route('admin.support.ticket.send.message')); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" value="<?php echo e($ticket_details->id); ?>" name="ticket_id">
                                        <input type="hidden" value="admin" name="user_type">
                                        <div class="form-group">
                                            <label for=""><?php echo e(__('Message')); ?></label>
                                            <textarea name="message" class="form-control d-none" cols="30" rows="5"></textarea>
                                            <div class="summernote"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="file"><?php echo e(__('File')); ?></label>
                                            <input type="file" name="file" accept="zip">
                                            <small
                                                class="info-text d-block text-danger"><?php echo e(__('max file size 200mb, only zip file is allowed')); ?></small>
                                        </div>
                                        <div class="form-group d-flex align-items-baseline gap-3">
                                            <input type="checkbox" name="send_notify_mail" id="send_notify_mail">
                                            <label for="send_notify_mail"><?php echo e(__('Notify Via Mail')); ?></label>
                                        </div>
                                        <button class="cmn_btn btn_bg_profile" type="submit"><?php echo e(__('Send Message')); ?></button>
                                    </form>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('backend.partials.media-upload.media-upload-markup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/summernote-bs4.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/js/dropzone.js')); ?>"></script>
    <?php echo $__env->make('backend.partials.media-upload.media-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        $(document).ready(function() {

            $('.summernote').summernote({
                height: 200, //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                },
                callbacks: {
                    onChange: function(contents, $editable) {
                        $(this).prev('textarea').val(contents);
                    },
                    onPaste: function (e) {
                        let bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('text/plain');
                        e.preventDefault();
                        document.execCommand('insertText', false, bufferText);
                    }
                }
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views\backend\support-ticket\view-ticket.blade.php ENDPATH**/ ?>