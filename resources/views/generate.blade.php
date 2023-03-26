@extends("base")

@section("content")
    <div class="d-flex justify-content-center">
        <div class="align-vertical-center">
            {{ Form::open(["route" => "generate-message", "id" => "form-message", "method" => "POST"]) }}
                <div class="input-group mb-3">
                    <input name="message" type="text" required class="form-control" placeholder="Digite uma mensagem">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Gerar</button>
                    </div>
                </div>
            {{ Form::close() }}
            <div id="messages"></div>
        </div>
    </div>
@endsection

@push("after-script")
    <script>
        $("#form-message").on("submit", function(e){
            e.preventDefault();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: $(this).attr("method"),
                url: $(this).attr("action"),
                data: $(this).serializeArray(),
                success: function (data) {
                    $("#messages").html(data);
                }
            });
        })
    </script>
@endpush
