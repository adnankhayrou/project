<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
@livewireStyles
   {{-- add piece form--}}
      @livewire('edit-piece', ['piece' => $piece])
      {{-- {{$piece->name}} --}}
   {{-- end --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
    // $(document).ready(function() {
    //     $('#images').on('change', function() {
    //     var input = $(this)[0];
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();
    //         reader.onload = function(e) {
    //         $('#preview-image').attr('src', e.target.result);
    //         }
    //         reader.readAsDataURL(input.files[0]);
    //     }
    //     });
    // });
</script>
@livewireScripts
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>