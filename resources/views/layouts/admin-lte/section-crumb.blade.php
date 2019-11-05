<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ config('app.name') }} <span class="brand-text font-weight-light h6">{{ $subtitle }}</span></h1>
            </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ asset('./home') }}">{{ $title }}</a></li>
            <li class="breadcrumb-item active" > {{ $subtitle }}</a></li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
