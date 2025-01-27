<?php

namespace AntibodiesOnline\DHL\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use AntibodiesOnline\DHL\Api\Runtime\Normalizer\CheckArray;
use AntibodiesOnline\DHL\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ShipmentLimitationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\ShipmentLimitations::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\ShipmentLimitations::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\ShipmentLimitations();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('maxNumberOfPieces', $data)) {
                $object->setMaxNumberOfPieces($this->denormalizer->denormalize($data['maxNumberOfPieces'], \AntibodiesOnline\DHL\Api\Model\ValueUnit::class, 'json', $context));
                unset($data['maxNumberOfPieces']);
            }
            if (\array_key_exists('maxShipmentWeight', $data)) {
                $object->setMaxShipmentWeight($this->denormalizer->denormalize($data['maxShipmentWeight'], \AntibodiesOnline\DHL\Api\Model\ValueUnit::class, 'json', $context));
                unset($data['maxShipmentWeight']);
            }
            if (\array_key_exists('html', $data)) {
                $object->setHtml($data['html']);
                unset($data['html']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('maxNumberOfPieces') && null !== $object->getMaxNumberOfPieces()) {
                $data['maxNumberOfPieces'] = $this->normalizer->normalize($object->getMaxNumberOfPieces(), 'json', $context);
            }
            if ($object->isInitialized('maxShipmentWeight') && null !== $object->getMaxShipmentWeight()) {
                $data['maxShipmentWeight'] = $this->normalizer->normalize($object->getMaxShipmentWeight(), 'json', $context);
            }
            if ($object->isInitialized('html') && null !== $object->getHtml()) {
                $data['html'] = $object->getHtml();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\ShipmentLimitations::class => false];
        }
    }
} else {
    class ShipmentLimitationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\ShipmentLimitations::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\ShipmentLimitations::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\ShipmentLimitations();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('maxNumberOfPieces', $data)) {
                $object->setMaxNumberOfPieces($this->denormalizer->denormalize($data['maxNumberOfPieces'], \AntibodiesOnline\DHL\Api\Model\ValueUnit::class, 'json', $context));
                unset($data['maxNumberOfPieces']);
            }
            if (\array_key_exists('maxShipmentWeight', $data)) {
                $object->setMaxShipmentWeight($this->denormalizer->denormalize($data['maxShipmentWeight'], \AntibodiesOnline\DHL\Api\Model\ValueUnit::class, 'json', $context));
                unset($data['maxShipmentWeight']);
            }
            if (\array_key_exists('html', $data)) {
                $object->setHtml($data['html']);
                unset($data['html']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('maxNumberOfPieces') && null !== $object->getMaxNumberOfPieces()) {
                $data['maxNumberOfPieces'] = $this->normalizer->normalize($object->getMaxNumberOfPieces(), 'json', $context);
            }
            if ($object->isInitialized('maxShipmentWeight') && null !== $object->getMaxShipmentWeight()) {
                $data['maxShipmentWeight'] = $this->normalizer->normalize($object->getMaxShipmentWeight(), 'json', $context);
            }
            if ($object->isInitialized('html') && null !== $object->getHtml()) {
                $data['html'] = $object->getHtml();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\ShipmentLimitations::class => false];
        }
    }
}