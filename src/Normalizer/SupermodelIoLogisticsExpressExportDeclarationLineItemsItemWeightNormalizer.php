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
    class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight();
            if (\array_key_exists('netValue', $data) && \is_int($data['netValue'])) {
                $data['netValue'] = (double) $data['netValue'];
            }
            if (\array_key_exists('grossValue', $data) && \is_int($data['grossValue'])) {
                $data['grossValue'] = (double) $data['grossValue'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('netValue', $data)) {
                $object->setNetValue($data['netValue']);
            }
            if (\array_key_exists('grossValue', $data)) {
                $object->setGrossValue($data['grossValue']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('netValue') && null !== $object->getNetValue()) {
                $data['netValue'] = $object->getNetValue();
            }
            if ($object->isInitialized('grossValue') && null !== $object->getGrossValue()) {
                $data['grossValue'] = $object->getGrossValue();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight();
            if (\array_key_exists('netValue', $data) && \is_int($data['netValue'])) {
                $data['netValue'] = (double) $data['netValue'];
            }
            if (\array_key_exists('grossValue', $data) && \is_int($data['grossValue'])) {
                $data['grossValue'] = (double) $data['grossValue'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('netValue', $data)) {
                $object->setNetValue($data['netValue']);
            }
            if (\array_key_exists('grossValue', $data)) {
                $object->setGrossValue($data['grossValue']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('netValue') && null !== $object->getNetValue()) {
                $data['netValue'] = $object->getNetValue();
            }
            if ($object->isInitialized('grossValue') && null !== $object->getGrossValue()) {
                $data['grossValue'] = $object->getGrossValue();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class => false];
        }
    }
}