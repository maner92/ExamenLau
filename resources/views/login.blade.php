
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        

<div class="col-md-8">
    <div class="card">
                    <form method="POST" action="{{route('validar')}}">
                    @csrf
                    <h1>Introduce los datos</h1>
                    <div class="form-outline mb-4">
                        <input type="text" id="curp" class="form-control" name="curp" required />
                        <label class="form-label" for="loginCurp">CURP</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control" name="password" required />
                        <label class="form-label" for="loginPassword">CONTRASEÑA</label>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-block mb-4">Entrar</button>
                    
                </div>
    </div>
</div>
