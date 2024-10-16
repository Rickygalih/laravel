<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopery</title>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(98.33% 98.33% at 0% 0%, #002D1A 0%, #004513 100%);
            color: white;
            box-sizing: border-box;
        }
        .container {
            position: relative;
            display: flex;
            width: 1920px;
            margin: auto;
        }
        .background-image {
            position: absolute;
            left: -2919.6px;
            top: 0;
            width: 3844.3px;
            height: 1078.7px;
            opacity: 0.05;
        }
        .content {
            display: flex;
            flex-direction: row;
            width: 2624.4px;
            position: relative;
        }
        .text-content {
            margin: 421.2px 66.8px 383px 0;
        }
        .logo {
            display: flex;
            flex-direction: row;
            margin: 0 14.7px 32.6px 0;
            align-items: center;
        }
        .logo img {
            width: 142.5px;
            height: 129.4px;
            margin-right: 20.3px;
        }
        .logo span {
            font-size: 142.5px;
            font-weight: 500;
            letter-spacing: -4.3px;
        }
        .description {
            font-size: 72px;
            font-weight: 500;
            line-height: 1.4;
            margin-bottom: 172.4px;
        }
        .features {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }
        .feature {
            margin-right: 59.2px;
        }
        .feature-number {
            font-size: 115.2px;
            font-weight: bold;
            color: #FFF61F;
            margin-bottom: 14.4px;
        }
        .feature-text {
            font-size: 46.8px;
            line-height: 1.2;
        }
        .separator {
            background: white;
            opacity: 0.2;
            width: 144px;
            height: 1px;
            margin: 48.7px 54px 104.7px 0;
        }
        .images-column {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-right: 32.4px;
            width: 1015.2px;
        }
        .images-column img {
            width: 100%;
            border-radius: 7.2px;
            box-shadow: 0px 43.1px 86.2px rgba(0, 0, 0, 0.05);
            opacity: 0.6;
            margin-bottom: 36px;
        }
        .blurry-image {
            filter: blur(7.2px);
            transform: rotate(30deg);
            margin: 3.6px 92.1px 250.3px 0;
        }
        .third-column {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 763.2px;
        }
        .third-column img {
            width: 100%;
            border-radius: 7.2px;
            box-shadow: 0px 43.1px 86.2px rgba(0, 0, 0, 0.05);
            opacity: 0.6;
            margin-bottom: 36px;
        }
        .circle {
            position: absolute;
            right: -339.8px;
            bottom: -32.4px;
            width: 198px;
            height: 198px;
            background: white;
            border-radius: 99px;
            box-shadow: -18px -18px 72px rgba(8, 79, 23, 0.3);
            padding-left: 3.6px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .circle img {
            width: 57.6px;
            height: 86.4px;
        }
        .small-image {
            position: absolute;
            background-size: cover;
            background-position: 50% 50%;
            width: 104.4px;
            height: 90px;
        }
        .small-image.top {
            top: 216px;
            right: 837.4px;
            background-image: url('../assets/images/objects.png');
        }
        .small-image.left {
            left: 50%;
            top: -75.6px;
            transform: translateX(-50%) rotate(-134.969deg);
            height: 240.5px;
            background-image: url('../assets/images/objects_1.png');
            filter: blur(3.6px);
        }
        .small-image.right {
            right: 838.7px;
            top: -122.4px;
            height: 240.5px;
            background-image: url('../assets/images/objects_1.png');
            filter: blur(3.6px);
            transform: rotate(-13.334deg);
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="../assets/vectors/group_9_x2.svg" class="background-image" alt="Background Image" />
        <div class="content">
            <div class="text-content">
                <div class="logo">
                    <img src="../assets/vectors/vector_477_x2.svg" alt="Logo" />
                    <span>Shopery</span>
                </div>
                <div class="description">
                    Organic eCommerce<br />
                    Figma Template
                </div>
                <div class="features">
                    <div class="feature">
                        <div class="feature-number">55+</div>
                        <div class="feature-text">Beautiful<br />page</div>
                    </div>
                    <div class="separator"></div>
                    <div class="feature">
                        <div class="feature-number">99+</div>
                        <div class="feature-text">Figma UI<br />Components</div>
                    </div>
                </div>
            </div>
            <div class="images-column">
                <img src="../assets/images/homepage_2.jpeg" alt="Homepage Image 2" />
                <img src="../assets/images/homepage_1.jpeg" alt="Homepage Image 1" />
                <div class="blurry-image">
                    <img src="../assets/images/image.png" alt="Blurred Image" />
                </div>
                <img src="../assets/images/homepage_22.jpeg" alt="Homepage Image 22" />
            </div>
            <div class="third-column">
                <img src="../assets/images/homepage_21.jpeg" alt="Homepage Image 21" />
                <img src="../assets/images/homepage_3.jpeg" alt="Homepage Image 3" />
                <img src="../assets/images/homepage_4.jpeg" alt="Homepage Image 4" />
            </div>
        </div>
        <div class="circle">
            <img src="../assets/images/" alt="Circular Image" />
        </div>
        <div class="small-image top"></div>
        <div class="small-image left"></div>
        <div class="small-image right"></div>
    </div>
</body>
</html>
