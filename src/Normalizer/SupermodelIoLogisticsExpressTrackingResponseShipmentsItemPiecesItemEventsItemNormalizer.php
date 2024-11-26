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
    class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
            }
            if (\array_key_exists('GMTOffset', $data)) {
                $object->setGMTOffset($data['GMTOffset']);
            }
            if (\array_key_exists('time', $data)) {
                $object->setTime($data['time']);
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('serviceArea', $data)) {
                $values = [];
                foreach ($data['serviceArea'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemServiceAreaItem::class, 'json', $context);
                }
                $object->setServiceArea($values);
            }
            if (\array_key_exists('signedBy', $data)) {
                $object->setSignedBy($data['signedBy']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            if ($object->isInitialized('gMTOffset') && null !== $object->getGMTOffset()) {
                $data['GMTOffset'] = $object->getGMTOffset();
            }
            if ($object->isInitialized('time') && null !== $object->getTime()) {
                $data['time'] = $object->getTime();
            }
            if ($object->isInitialized('typeCode') && null !== $object->getTypeCode()) {
                $data['typeCode'] = $object->getTypeCode();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('serviceArea') && null !== $object->getServiceArea()) {
                $values = [];
                foreach ($object->getServiceArea() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['serviceArea'] = $values;
            }
            if ($object->isInitialized('signedBy') && null !== $object->getSignedBy()) {
                $data['signedBy'] = $object->getSignedBy();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
            }
            if (\array_key_exists('GMTOffset', $data)) {
                $object->setGMTOffset($data['GMTOffset']);
            }
            if (\array_key_exists('time', $data)) {
                $object->setTime($data['time']);
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('serviceArea', $data)) {
                $values = [];
                foreach ($data['serviceArea'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemServiceAreaItem::class, 'json', $context);
                }
                $object->setServiceArea($values);
            }
            if (\array_key_exists('signedBy', $data)) {
                $object->setSignedBy($data['signedBy']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            if ($object->isInitialized('gMTOffset') && null !== $object->getGMTOffset()) {
                $data['GMTOffset'] = $object->getGMTOffset();
            }
            if ($object->isInitialized('time') && null !== $object->getTime()) {
                $data['time'] = $object->getTime();
            }
            if ($object->isInitialized('typeCode') && null !== $object->getTypeCode()) {
                $data['typeCode'] = $object->getTypeCode();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('serviceArea') && null !== $object->getServiceArea()) {
                $values = [];
                foreach ($object->getServiceArea() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['serviceArea'] = $values;
            }
            if ($object->isInitialized('signedBy') && null !== $object->getSignedBy()) {
                $data['signedBy'] = $object->getSignedBy();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class => false];
        }
    }
}