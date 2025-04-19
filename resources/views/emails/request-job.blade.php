<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>طلب توظيف جديد من {{ $mailData['name'] }}</title>
</head>

<body>
    <div class="container">
        
        <div class="message">
            <p>مرحباً ,</p>
            <p>قام {{ $mailData['name'] }} بالتقديم لطلب وظيفة جديد.</p>
            <p>رقم الهاتف الخاص به: {{ $mailData['phone_number'] }}</p>
            @if ($mailData['subject'])
                <p>الموضوع: {{ $mailData['subject'] }}</p>
            @else
                <p>السيرة الذاتية الخاصة به: <a href="{{ asset($mailData['cv']) }}" target="_blank" rel="noopener noreferrer">اضغط هنا</a> لفتحها</p>
            @endif
            <p>الرسالة الخاصة به: {{ $mailData['message'] }}</p>
        </div>
        
    </div>
</body>

</html>