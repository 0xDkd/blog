@if (count($errors) > 0)
    <div data-v-6c5f8021="" role="alert" aria-live="polite" aria-atomic="true" class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <ul style="margin-bottom:0rem;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif