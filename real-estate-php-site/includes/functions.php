<?php
/**
 * Rudra Housing - Functions File
 * Handles properties and contact submissions
 */

// ------------------- PROPERTIES -------------------

/**
 * Get all properties from properties.json
 *
 * @return array
 */
function get_all_properties() {
    $file = __DIR__ . '/../data/properties.json'; // path to properties.json
    if (!file_exists($file)) return [];
    $json = file_get_contents($file);
    $data = json_decode($json, true);
    return is_array($data) ? $data : [];
}

/**
 * Get a single property by ID
 *
 * @param int $id
 * @return array|null
 */
function get_property_by_id($id) {
    foreach (get_all_properties() as $prop) {
        if ($prop['id'] == $id) return $prop;
    }
    return null;
}

/**
 * Filter properties by city, min price, max price, and type
 *
 * @param array $properties
 * @param string $city
 * @param string|int $min
 * @param string|int $max
 * @param string $type
 * @return array
 */
function filter_properties($properties, $city = '', $min = '', $max = '', $type = '') {
    return array_filter($properties, function($p) use ($city, $min, $max, $type) {
        if ($city && strtolower($p['city']) !== strtolower($city)) return false;
        if ($type && strtolower($p['type']) !== strtolower($type)) return false;
        if ($min !== '' && $p['price'] < (int)$min) return false;
        if ($max !== '' && $p['price'] > (int)$max) return false;
        return true;
    });
}

// ------------------- CONTACTS -------------------

/**
 * Save contact form submission to contacts.json
 *
 * @param array $contactData
 * @return void
 */
function save_contact($contactData) {
    $file = __DIR__ . '/../data/contacts.json';

    // Read existing contacts
    $contacts = [];
    if (file_exists($file)) {
        $json = file_get_contents($file);
        $contacts = json_decode($json, true);
        if (!is_array($contacts)) $contacts = [];
    }

    // Add new contact
    $contactData['submitted_at'] = date('Y-m-d H:i:s');
    $contacts[] = $contactData;

    // Save back to JSON
    file_put_contents($file, json_encode($contacts, JSON_PRETTY_PRINT));
}
