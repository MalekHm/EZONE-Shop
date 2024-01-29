<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
        $statistics = [['title' => __('Total Admin'), 'value' => $total_admin, 'icon' => 'lar la-user'], ['title' => __('Total Customer'), 'value' => $total_user, 'icon' => 'lar la-user'], ['title' => __('Total Blog'), 'value' => $all_blogs_count, 'icon' => 'lar la-edit'], ['title' => __('Total Products'), 'value' => $all_products_count, 'icon' => 'las la-box'], ['title' => __('Completed Sale'), 'value' => $all_completed_sell_count, 'icon' => 'las la-boxes'], ['title' => __('Pending Sale'), 'value' => $all_pending_sell_count, 'icon' => 'las la-history'], ['title' => __('Sold Amount'), 'value' => $total_sold_amount, 'icon' => 'las la-coins'], ['title' => __('Ongoing Campaign'), 'value' => $total_ongoing_campaign, 'icon' => 'las la-gifts']];
    ?>

    <div class="dashboard-profile-inner">
        <div class="row g-4 justify-content-center">
            <div class="col-xxl-3 col-xl-6 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> <?php echo e(__('Total Admin')); ?> </span>
                            <h2 class="order-titles"> <?php echo e($total_admin); ?> </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-tasks"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">

                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> <?php echo e(__('Total Vendors')); ?> </span>
                            <h2 class="order-titles"> <?php echo e($total_vendor); ?> </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-handshake"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">

                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> <?php echo e(__('Total Users')); ?> </span>
                            <h2 class="order-titles"> <?php echo e($total_user); ?> </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-handshake"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> <?php echo e(__('Total Blogs')); ?> </span>
                            <h2 class="order-titles"> <?php echo e($all_blogs_count); ?> </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> <?php echo e(__('Total Product')); ?> </span>
                            <h2 class="order-titles"> <?php echo e($all_products_count); ?> </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> <?php echo e(__('Total Completed Order')); ?> </span>
                            <h2 class="order-titles"> <?php echo e($all_completed_sell_count); ?> </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-file-invoice-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> <?php echo e(__('Total Pending Order')); ?> </span>
                            <h2 class="order-titles"> <?php echo e($all_pending_sell_count); ?> </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-file-invoice-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> <?php echo e(__('Total Sold Amount')); ?> </span>
                            <h2 class="order-titles"> <?php echo e($total_sold_amount); ?> </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-file-invoice-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> <?php echo e(__('Last week earning')); ?> </span>
                            <h2 class="order-titles"> <?php echo e($last_week_earning); ?> </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> <?php echo e(__('This month earning')); ?> </span>
                            <h2 class="order-titles"> <?php echo e($running_month_earning); ?> </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-file-invoice-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> <?php echo e(__('Last month earning')); ?> </span>
                            <h2 class="order-titles"> <?php echo e($last_month_earning); ?> </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-file-invoice-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> <?php echo e(__('This year earning')); ?> </span>
                            <h2 class="order-titles"> <?php echo e($this_year_earning); ?> </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-file-invoice-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-inner-contents-wrapper">
        <div class="dashboard-flex-item-two">
            <div class="single-flex-dashbaord mt-4">
                <div class="dashboard-single-profile dashboard-profile-padding bg-white radius-10">
                    <div class="profile-single-contents">
                        <div class="seller-title-flex-contents">
                            <h2 class="dashboard-common-title"> <?php echo e(__('Yearly Income Statement')); ?> </h2>
                            <span class="seller-title-right chart-icon radius-5"> <i class="las la-chart-bar"></i> </span>
                        </div>
                        <h3 class="dashboard-earning-price mt-3">
                            <?php echo e(float_amount_with_currency_symbol(array_sum($yearly_income_statement->toArray()))); ?> </h3>
                    </div>
                    <div class="bar-charts chart-height mt-4">
                        <canvas id="bar-chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="single-flex-dashbaord">
                <div class="dashboard-flex-row-profile">
                    <div class="single-flex-dashbaord-two dashboard-profile-padding center-text bg-white radius-10 mt-4">
                        <div class="dashboard-single-profile">
                            <div class="profile-single-contents">
                                <span class="dashboard-week-earning"> <?php echo e(__('This Week Earnings')); ?> </span>
                                <h3 class="dashboard-earning-price mt-3">
                                    <?php echo e(float_amount_with_currency_symbol(array_sum($weekly_statement->toArray()))); ?> </h3>
                            </div>
                            <div class="line-charts mt-3">
                                <canvas id="line-chart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="single-flex-dashbaord-two dashboard-profile-padding center-text bg-white radius-10 mt-4">
                        <div class="dashboard-single-profile">
                            <div id="custom-color-calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/chart.js')); ?>"></script>

    <?php
        $monthName = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $monthArray = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $weekName = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        $weekArray = [0, 0, 0, 0, 0, 0, 0];

        foreach ($yearly_income_statement as $month => $value) {
            $monthArray[array_search($month, $monthName, true)] = (float) $value;
        }

        foreach ($weekly_statement as $week => $value) {
            $weekArray[array_search($week, $weekName, true)] = (float) $value;
        }
    ?>
    <script>
        new Chart(document.getElementById("bar-chart"), {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', "Mar", 'Apr', 'May', "Jun", "July", 'Aug', "Sep", 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: "Statement",
                    backgroundColor: "#e9edf7",
                    data: [
                        <?php $__currentLoopData = $monthArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($value); ?>,
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ],
                    barThickness: 15,
                    hoverBackgroundColor: '#05cd99',
                    hoverBorderColor: '#05cd99',
                    borderRadius: 5,
                    minBarLength: 0,
                    indexAxis: "x",
                    pointStyle: 'star',
                }, ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        new Chart(document.getElementById("line-chart"), {
            type: 'line',
            data: {
                labels: ['Sun', 'Mon', "Tue", 'Wed', 'Thu', "Fri", "Sat"],
                datasets: [{
                    data: [
                        <?php $__currentLoopData = $weekArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($value); ?>,
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ], //[265, 270, 268, 272, 270, 267, 270],
                    label: "Earnings",
                    borderColor: "#05cd99",
                    borderWidth: 2,
                    fill: true,
                    backgroundColor: 'rgba(5, 205, 153,.08)',
                    fillBackgroundColor: "#f9503e",
                    pointBorderWidth: 2,
                    pointBackgroundColor: '#fff',
                    pointRadius: 3,
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "#05cd99",
                }, ]
            },
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ESHOP\main-file\core\resources\views/backend/admin-home.blade.php ENDPATH**/ ?>