<?php

namespace App\Helpers;

class Payment{


    public const STRIPE_SEC_KEY = "sk_test_51LzxGLETd0vFG2HZYWmVjWLfJZw4QRW1ZwJLR1mYzPvm1qn1u5Hb0wiNb6vPG9DGRzVg9bt3IZPmOpiSljshhU1x00ZcTYBSk8";
    public const STRIPE_PUB_KEY = "pk_test_51LzxGLETd0vFG2HZAEZe4BOliqZMJjRxJP3SmKseCmH6pHcwxqtlNbHL1NZCN2Zu5U0c91WPTd3XPkU50HBq0izI00RZkkWttY";

    public const PAYSTACK_SECRET_KEY = "sk_test_185e37f2d508f41a85ee621c51fd8d8d56641c32";
    public const PAYSTACK_PUBLIC_KEY = "pk_test_02e3ac11338854971a23e5837650be4bb21c05d5";
    public const PAYSTACK_INITIALIZE_URL = "https://api.paystack.co/transaction/initialize";
    public const PAYSTACK_VERIFYURL =  "https://api.paystack.co/transaction/verify/";

}
