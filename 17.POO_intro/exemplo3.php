<?php

class Document {
    private $number;

    public function getNumber() {
        return $this->number;
    }

    public function setNumber($value) {
        // para acessar métodos estáticos ::
        $result = Document::cpfValidator($value);

        if ($result === false) {
            throw new Exception("CPF informado não é válido", 1);
        }

        $this->number = $value;
    }

    // Declarar métodos e argumentos como static, faz deles acessíveis sem necessitar instanciá-los
    public static function cpfValidator($value):bool {
        $value = preg_replace('[^0-9]', '', $value);
        $value = str_pad($value, 11, '0', STR_PAD_LEFT);

        if (strlen($value) != 11) {
            return false;
        }
        
        else if ($value == '00000000000' ||
        $value == '11111111111' ||
        $value == '22222222222' ||
        $value == '33333333333' ||
        $value == '44444444444' ||
        $value == '55555555555' ||
        $value == '66666666666' ||
        $value == '77777777777' ||
        $value == '88888888888' ||
        $value == '99999999999') {
        return false;
        } else {
            for ($i = 9; $i < 11; $i++) {
                for ($n = 0, $x = 0; $x < $i; $x++) {
                    $n += $value{$x} * (($i + 1) - $x);
                }
                $n = ((10 * $n) % 11) % 10;
                if ($value{$x} != $n) {
                    return false;
                }
            }
        }

        return true;
    }
}


$cpf = new Document();
$cpf->setNumber('10932304796');

var_dump($cpf->getNumber());

$cpfNumber = '51659659898198198';
var_dump(Document::cpfValidator($cpfNumber))
?>