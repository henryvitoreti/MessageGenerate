<p class="font-weight-bold">Mensagem digitada: {{ $message }}</p>

@for ($i = 1; $i <= 5; $i++)
    <p class="font-weight-bold">Loop for #{{ $i }}: {{ $message }}</p>
@endfor

@foreach (range(1, 5) as $i)
    <p class="font-weight-bold">Loop foreach #{{ $i }}: {{ $message }}</p>
@endforeach
