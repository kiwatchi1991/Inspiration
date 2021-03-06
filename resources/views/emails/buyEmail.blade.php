<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <style>
        .p-buyEmail {
            padding: 16px;
        }

        .p-buyEmail__title {
            margin-top: 32px;
        }

        .p-buyEmail__contents {
            margin-top: 40px;
        }

        .p-buyEmail__footer {
            margin-top: 40px;
        }

        .p-buyEmail__link {
            font-size: 14px;
        }
    </style>
    <div class="p-buyEmail">
        <p>本メールは送信専用です。</p>
        <div class="p-buyEmail__title">
        <p>{{ $order->users->name }} 様</p>
        </div>
        <p>Inspiration をご利用いただきありがとうございます。</p>
        <p>以下の商品を購入しました。</p>
        <div class="p-buyEmail__contents">
            <p>◻️ 購入商品情報</p>
            商品名 : {{ $order->ideas->title }}<br>
            商品説明 : {{ $order->ideas->description }}<br>
            出品者 : {{ $order->ideas->user->name }}<br>
            <span class="p-buyEmail__link">(購入した商品は <a href="{{ route('ideas.show',$order->ideas->id) }}">こちら</a>)</span><br>
            購入金額 : {{ number_format($order->ideas->price)}}<br>
            購入日時 : {{ $order->created_at }}<br>
        </div>
        <div class="p-buyEmail__footer">
            ==============================<br>
            Inspiration カスタマーセンター<br>
            HP: <a href="">https://</a><br>
            MAIL: <a href=""></a><br>
            ==============================<br>
        </div>
    </div>
</body>

</html>