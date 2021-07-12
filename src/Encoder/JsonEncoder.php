<?php

namespace App\Encoder;

use Symfony\Component\Serializer\Encoder\JsonEncode;

/**
 * Кастомный кодировщик данных для JSON
 * Предназначен для хранения дополнительных параметров кодировки
 *
 * Class JsonEncoder
 * @package App\Encoder
 */
class JsonEncoder extends \Symfony\Component\Serializer\Encoder\JsonEncoder
{
    /**
     * {@inheritdoc}
     */
    public function encode($data, string $format, array $context = []): bool|string
    {
        $context[JsonEncode::OPTIONS] = JSON_UNESCAPED_UNICODE;
        return $this->encodingImpl->encode($data, self::FORMAT, $context);
    }
}