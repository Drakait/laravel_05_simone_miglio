<x-layout>

    <div class="container-fluid">
        <div class="row height-custom align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 title">CIAO</h1>
                @if(session('status'))
                    <div class="alert alert-status text-center mt-3 text-light rounded-pill shadow w-50 mx-auto box-bg-status" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-layout>