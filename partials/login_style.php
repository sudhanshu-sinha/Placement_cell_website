
.popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
        }
        
        .form-wrapper {
            position: absolute;
            left: 50%;
            top: 50%;
            border-radius: 4px;
            padding: 70px;
            width: 450px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.75);
            z-index: 1001;
        }
        
        .form-wrapper h2 {
            color: #fff;
            font-size: 2rem;
        }
        
        .form-wrapper form {
            margin: 25px 0 65px;
        }
        
        .close {
            position: absolute;
            top: 0px;
            right: 15px;
            font-size: 44px;
            color: #e50914;
            cursor: pointer;
        }
        
        form {
            display: flex;
            flex-direction: column;
        }
        
        form .form-control {
            height: 50px;
            position: relative;
            margin-bottom: 16px;
        }
        
        .form-control input {
            height: 100%;
            width: 100%;
            background: #333;
            border: none;
            outline: none;
            border-radius: 4px;
            color: #fff;
            font-size: 1rem;
            padding: 0 20px;
        }
        
        .form-control input:is(:focus, :valid) {
            background: #444;
            padding: 16px 20px 0;
        }
        
        .form-control label {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1rem;
            pointer-events: none;
            color: #8c8c8c;
            transition: all 0.1s ease;
        }
        
        .form-control input:is(:focus, :valid)~label {
            font-size: 0.75rem;
            transform: translateY(-130%);
        }
        
        button {
            width: 100%;
            padding: 16px 0;
            font-size: 1rem;
            background: #e50914;
            color: #fff;
            font-weight: 500;
            border-radius: 4px;
            border: none;
            outline: none;
            margin: 25px 0 10px;
            cursor: pointer;
            transition: 0.1s ease;
        }
        
        #loginButton {
            padding: 10px 15px;
            margin: 15px 0px;
        }
        
        button:hover {
            background: #c40812;
        }
        
        .form-wrapper :where(label) {
            color: #b3b3b3;
        }
        
        form .form-help {
            display: flex;
            justify-content: space-between;
        }
        
        form .remember-me {
            display: flex;
        }
        
        form .remember-me input {
            margin-right: 5px;
            accent-color: #b3b3b3;
        }
        
        form .form-help :where(label) {
            font-size: 0.9rem;
        }

        @media (max-width: 740px) {
            .form-wrapper {
                width: 100%;
                top: 43%;
            }
            .form-wrapper form {
                margin: 25px 0 40px;
            }
        }