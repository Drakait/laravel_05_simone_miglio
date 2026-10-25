<x-layout>
    
    <div class="container-fluid">
        <div class="row height-custom align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 title rounded-pill">contattaci!</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 my-5">
                <form class="py-3 px-5 box-bg rounded shadow text-light" method="POST" action="{{ route('contact.submit') }}">
                    @csrf {{-- cross-site request forgery --}}
                    <div class="mb-3">
                        <label for="username" class="form-label">inserisci il tuo nome completo</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">inserisci la tua email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Scrivici il tuo messaggio</label>
                        <textarea name="message" class="form-control" id="message" cols="50" rows="10"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">

                        <button type="submit" class="btn btn-dark rounded-pill border">Invia</button>
                    
                    </div>

                </form>
            </div>
        </div>
        
    </div>
    
    
    
    
</x-layout>