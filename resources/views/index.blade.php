<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boolpress</title>
    </head>
    <body>
        <main>
            @foreach ($data as $post)
                <section class="post">
                    <p>{{ $post->text }}</p>
                    <h4>{{ $post->author }}</h4>

                    <p>{{ $post->info->created_at }}</p>

                    <p>commento:</p>
                    @if ($post->comment != null)
                        @foreach($post->comment as $item)
                            <p>{{ $item->comment }}</p>
                            <h4>{{ $item->author }}</h4>
                        @endforeach
                    @endif

                    <hr>
                </section>
            @endforeach

            <a href="{{ route('create') }}">Aggiungi</a>
        </main>
    </body>
</html>