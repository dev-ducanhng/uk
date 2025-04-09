<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(isset($link))
        <meta http-equiv="refresh" content="0;url={{ $link->url }}">
    @endif
    <title>Chuyển hướng 301</title>
    <style>
        body {
            background: #f5f7fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .redirect-box {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            text-align: center;
            max-width: 500px;
            width: 90%;
        }

        .redirect-box h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }

        .redirect-box p {
            font-size: 16px;
            color: #666;
        }

        .redirect-box a {
            color: #007bff;
            text-decoration: none;
            font-weight: 600;
        }

        .redirect-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="redirect-box">
        <h1>🔁 Trang đã được chuyển đến địa chỉ mới</h1>
        <p>Bạn sẽ được tự động chuyển đến: <br>
        @if(isset($link))
        <a href="{{ $link->url }}">{{ $link->url }}</a> trong <span id="countdown">3</span> giây...
            @else
                <strong>Không tìm thấy đường dẫn chuyển hướng.</strong>
            @endif
    </div>
</body>
@if(isset($link))
<script>
    let seconds = 3;
    const countdownEl = document.getElementById('countdown');

    const timer = setInterval(() => {
        seconds--;
        countdownEl.textContent = seconds;
        if (seconds <= 0) {
            clearInterval(timer);
            window.location.href = "{{ $link->url }}";
        }
    }, 1000);
</script>
@endif
</html>