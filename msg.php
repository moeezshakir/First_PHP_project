    <style>
        .Message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            font-size: 20px;
            border-radius: 5px;
            box-shadow: rgb(0 0 0 / 25%) 0px 5px 10px 2px;
            transition: 0.2s;
            z-index: 6;
            background-color: #2ECC40;
            display: none;
        }

        .Message-icon {
            width: 100%;
            height: 55px;
            display: flex;
            justify-content: center;
            background-color: #40d637;
            align-items: center;
            border-radius: 4px 4px 0 0;
        }

        .Message-icon .check {
            font-size: 38px;
            color: #fff;
        }

        .closeBtn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            color: #fff;
            width: 28px;
            height: 28px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 15px;
            border-radius: 50px;
            border: 1px solid;
            cursor: pointer;
            transition: 0.2s;
        }

        .closeBtn:hover {
            background-color: #fff;
            color: #40d637;
        }

        .Message {
            background-color: #2ECC40;
        }

        .Message-body {
            padding: 10px;
        }

        .Message p {
            font-size: 17px;
            margin: 0;
            color: #fff;
        }

        @media screen and (max-width: 400px) {
            .Message {
                width: 100%;
            }
        }
    </style>
    <div class="Message" id="message">
        <div class="Message-icon">
            <i class="bi bi-check-circle check"></i>
        </div>
        <button class="Message-close closeBtn" onclick="closeMessage()"><i class="bi bi-x-lg"></i></button>
        <div class="Message-body">
            <p>Ordered Successfully!</p>
            <p>You will receive shortly.</p>
        </div>
    </div>