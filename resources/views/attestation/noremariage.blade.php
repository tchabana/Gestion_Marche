<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Certificat de non-remariage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .certificate {
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 20px;
        }

        .certificate h2 {
            text-align: center;
            margin-top: 0;
            color: #333;
        }

        .government-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .government-header .left-block {
            text-align: left;
        }

        .government-header .right-block {
            text-align: right;
        }

        .government-header h3 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .government-header p {
            margin: 0;
            font-size: 16px;
            color: #666;
        }

        .paragraph-block {
            text-align: center;
        }

        .paragraph-block p {
            margin: 0;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <div class="government-header">
        <div class="left-block">
            <h3>MINISTÈRE DE L'ADMINISTRATION TERRITORIALE</h3>
            <h3>DE LA DÉCENTRALISATION ET DU DÉVELOPPEMENT</h3>
            <h3>DES TERRITOIRES</h3>
            <p>Travail-Liberté-Patrie</p>
        </div>
        <div class="right-block">
            <h3>RÉPUBLIQUE TOGOLAISE</h3>
            <h3>REGION CENTRALE</h3>
            <h3>COMMUNE DE TCHAOUDJO 1</h3>
            <h3>N°/CT1</h3>
        </div>
    </div>

    <div class="header">
        <h1>Certificat de non-remariage</h1>
    </div>
    <div class="certificate">
        <div class="paragraph-block">
            <p>
                Je soussigné, <strong>{{$data['maire']}}</strong> Maire de la Commune de Tchaoudjo 1, atteste   qu'après enquête auprès du chef et notables
                du défunt,<br> <strong>Mme Veuve {{$data['maire']}}</strong> née le <strong>{{$data['maire']}}</strong> Épouse du feu <strong>{{$data['maire']}}</strong>  ne s'est jamais remariée et ne vit pas en
                concubinage notoire. <br> En foi de quoi, cette présente attestation lui est délivrée pour servir et valoir ce que de droit.
            </p>
        </div>
        <div class="footer">
            <p>SOKODE, LE {{date('m/d/Y')}}</p><br>
            <p>POUR LE MAIRE ET P.O</p>
        </div>
    </div>
</body>

</html>