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
    class ContactDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\ContactDetails::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\ContactDetails::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\ContactDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('phoneNumber', $data)) {
                $object->setPhoneNumber($data['phoneNumber']);
                unset($data['phoneNumber']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
                unset($data['email']);
            }
            if (\array_key_exists('linkUri', $data)) {
                $object->setLinkUri($data['linkUri']);
                unset($data['linkUri']);
            }
            if (\array_key_exists('servicePointId', $data)) {
                $object->setServicePointId($data['servicePointId']);
                unset($data['servicePointId']);
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
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['phoneNumber'] = $object->getPhoneNumber();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('linkUri') && null !== $object->getLinkUri()) {
                $data['linkUri'] = $object->getLinkUri();
            }
            if ($object->isInitialized('servicePointId') && null !== $object->getServicePointId()) {
                $data['servicePointId'] = $object->getServicePointId();
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
            return [\AntibodiesOnline\DHL\Api\Model\ContactDetails::class => false];
        }
    }
} else {
    class ContactDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\ContactDetails::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\ContactDetails::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\ContactDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('phoneNumber', $data)) {
                $object->setPhoneNumber($data['phoneNumber']);
                unset($data['phoneNumber']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
                unset($data['email']);
            }
            if (\array_key_exists('linkUri', $data)) {
                $object->setLinkUri($data['linkUri']);
                unset($data['linkUri']);
            }
            if (\array_key_exists('servicePointId', $data)) {
                $object->setServicePointId($data['servicePointId']);
                unset($data['servicePointId']);
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
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['phoneNumber'] = $object->getPhoneNumber();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('linkUri') && null !== $object->getLinkUri()) {
                $data['linkUri'] = $object->getLinkUri();
            }
            if ($object->isInitialized('servicePointId') && null !== $object->getServicePointId()) {
                $data['servicePointId'] = $object->getServicePointId();
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
            return [\AntibodiesOnline\DHL\Api\Model\ContactDetails::class => false];
        }
    }
}