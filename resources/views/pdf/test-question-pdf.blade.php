<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test Question PDF</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Question</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
            <tr>
                <td>{{ $question->question }}</td>
                <td>{{ $question->answer }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
