<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Template - {{ $template->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container">
        <h1>{{ $template->name }}</h1>

        <div class="email-content">
            <!-- Render your template content here -->
            <pre>{{ $template->content }}</pre> <!-- Assuming content is stored as plain text -->
        </div>

        <div class="navigation-buttons">
            @if ($prevTemplate)
                <a href="{{ route('emailbuilder.templates.show', $prevTemplate->id) }}" class="btn btn-primary">Previous Template</a>
            @endif

            @if ($nextTemplate)
                <a href="{{ route('emailbuilder.templates.show', $nextTemplate->id) }}" class="btn btn-primary">Next Template</a>
            @endif
        </div>
    </div>

</body>
</html>
