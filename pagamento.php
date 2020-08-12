<?php
    require_once('vendor/autoload.php');
    use Paymentsds\MPesa\Client;

    $celular = $_POST['celular'];
    $valor = $_POST['valor'];
    $reference = $_POST['reference'];
    
    $client = new Client([
        'apiKey' => '<REPLACE>',                // API Key
        'publicKey' => '<REPLACE>',             // Public Key
        'serviceProviderCode' => '<REPLACE>'    // input_ServiceProviderCode
    ]);

    if(!empty($celular) && !empty($valor) && !empty($reference)){
        $paymentData = [
            'from' => '258' . $celular,                 // input_CustomerMSISDN
            'reference' => $reference,          // input_ThirdPartyReference
            'transaction' => 'T12344CC',        // input_TransactionReference
            'amount' => $valor                  // input_Amount
        ]; 

        $result = $client->receive($paymentData);

        if ($result->success) {
           echo "Pagamento efectuado!";
        } else {
            echo "Falha ao processar pagamento";
        }
    }else{
        echo "Preencha todos os campos do formulário";
    }
?>