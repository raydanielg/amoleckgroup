<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Client;
use App\Models\InventoryItem;
use App\Models\Order;
use Illuminate\Database\Seeder;

class AmoleckSeeder extends Seeder
{
    public function run(): void
    {
        // Clients
        $clients = [
            ['first_name' => 'John', 'last_name' => 'Doe', 'phone' => '0754 123 456', 'email' => 'john@email.com', 'type' => 'patient', 'division' => 'Physiotherapy', 'address' => 'Arusha'],
            ['first_name' => 'Mary', 'last_name' => 'Smith', 'phone' => '0788 654 321', 'email' => 'mary@email.com', 'type' => 'patient', 'division' => 'Physiotherapy', 'address' => 'Moshi'],
            ['first_name' => 'Grace', 'last_name' => 'Komba', 'phone' => '0712 987 654', 'email' => 'grace@email.com', 'type' => 'patient', 'division' => 'Physiotherapy', 'address' => 'Arusha'],
            ['first_name' => 'Joseph', 'last_name' => 'Mwangi', 'phone' => '0766 345 678', 'email' => 'joseph@email.com', 'type' => 'business', 'division' => 'AMES', 'address' => 'Dar es Salaam'],
            ['first_name' => 'Asha', 'last_name' => 'Hassan', 'phone' => '0744 567 890', 'email' => 'asha@email.com', 'type' => 'individual', 'division' => 'ASCA', 'address' => 'Moshi'],
            ['first_name' => 'Peter', 'last_name' => 'Joseph', 'phone' => '0733 111 222', 'email' => 'peter@email.com', 'type' => 'patient', 'division' => 'Physiotherapy', 'address' => 'Arusha'],
            ['first_name' => 'Neema', 'last_name' => 'Baraka', 'phone' => '0755 333 444', 'email' => 'neema@email.com', 'type' => 'patient', 'division' => 'Physiotherapy', 'address' => 'Arusha'],
            ['first_name' => 'David', 'last_name' => 'Wilson', 'phone' => '0766 555 666', 'email' => 'david@email.com', 'type' => 'business', 'division' => 'AMOTECH', 'address' => 'Online'],
            ['first_name' => 'Rebecca', 'last_name' => 'John', 'phone' => '0788 777 888', 'email' => 'rebecca@email.com', 'type' => 'patient', 'division' => 'Physiotherapy', 'address' => 'Moshi'],
            ['first_name' => 'Frank', 'last_name' => 'Mushi', 'phone' => '0712 999 000', 'email' => 'frank@email.com', 'type' => 'patient', 'division' => 'Physiotherapy', 'address' => 'Arusha'],
            ['first_name' => 'Arusha', 'last_name' => 'Pharmacy', 'phone' => '0766 444 555', 'email' => 'orders@arushapharm.co.tz', 'type' => 'business', 'division' => 'APHAMKO', 'address' => 'Arusha'],
            ['first_name' => 'City', 'last_name' => 'Clinic', 'phone' => '0755 222 333', 'email' => 'info@cityclinic.co.tz', 'type' => 'business', 'division' => 'AMES', 'address' => 'Dar es Salaam'],
        ];

        foreach ($clients as $c) {
            Client::create($c);
        }

        // Appointments
        $appointments = [
            ['client_id' => 1, 'reference' => 'AMO-2026-001', 'service' => 'physiotherapy', 'care_type' => 'home', 'appointment_date' => now()->toDateString(), 'appointment_time' => '09:00', 'therapist' => 'Dr. Sarah', 'status' => 'confirmed'],
            ['client_id' => 2, 'reference' => 'AMO-2026-002', 'service' => 'physiotherapy', 'care_type' => 'clinic', 'appointment_date' => now()->toDateString(), 'appointment_time' => '10:30', 'therapist' => 'Dr. Sarah', 'status' => 'confirmed'],
            ['client_id' => 3, 'reference' => 'AMO-2026-003', 'service' => 'physiotherapy', 'care_type' => 'home', 'appointment_date' => now()->toDateString(), 'appointment_time' => '14:00', 'therapist' => 'Unassigned', 'status' => 'pending'],
            ['client_id' => 4, 'reference' => 'AMO-2026-004', 'service' => 'ames', 'care_type' => 'clinic', 'appointment_date' => now()->toDateString(), 'appointment_time' => '15:30', 'therapist' => null, 'status' => 'confirmed'],
            ['client_id' => 5, 'reference' => 'AMO-2026-005', 'service' => 'asca', 'care_type' => 'clinic', 'appointment_date' => now()->toDateString(), 'appointment_time' => '16:00', 'therapist' => null, 'status' => 'pending'],
            ['client_id' => 6, 'reference' => 'AMO-2026-006', 'service' => 'physiotherapy', 'care_type' => 'home', 'appointment_date' => now()->addDay()->toDateString(), 'appointment_time' => '09:00', 'therapist' => 'Dr. Michael', 'status' => 'confirmed'],
            ['client_id' => 7, 'reference' => 'AMO-2026-007', 'service' => 'physiotherapy', 'care_type' => 'clinic', 'appointment_date' => now()->addDay()->toDateString(), 'appointment_time' => '11:00', 'therapist' => 'Dr. Sarah', 'status' => 'confirmed'],
            ['client_id' => 8, 'reference' => 'AMO-2026-008', 'service' => 'amotech', 'care_type' => 'clinic', 'appointment_date' => now()->addDay()->toDateString(), 'appointment_time' => '14:00', 'therapist' => null, 'status' => 'pending'],
            ['client_id' => 9, 'reference' => 'AMO-2026-009', 'service' => 'physiotherapy', 'care_type' => 'home', 'appointment_date' => now()->addDays(2)->toDateString(), 'appointment_time' => '10:00', 'therapist' => 'Dr. Michael', 'status' => 'confirmed'],
            ['client_id' => 10, 'reference' => 'AMO-2026-010', 'service' => 'physiotherapy', 'care_type' => 'clinic', 'appointment_date' => now()->subDay()->toDateString(), 'appointment_time' => '15:00', 'therapist' => 'Dr. Sarah', 'status' => 'completed'],
        ];

        foreach ($appointments as $a) {
            Appointment::create($a);
        }

        // Orders
        $orders = [
            ['client_id' => 11, 'reference' => 'ORD-2026-001', 'division' => 'aphamko', 'items' => 'Amoxicillin x500, Paracetamol x300', 'total' => 1250000, 'delivery_to' => 'Arusha', 'eta' => now()->setTime(17, 0), 'status' => 'transit'],
            ['client_id' => 12, 'reference' => 'ORD-2026-002', 'division' => 'ames', 'items' => 'BP Monitors x10, Stethoscopes x15', 'total' => 3800000, 'delivery_to' => 'Dar es Salaam', 'eta' => now()->addDay()->setTime(12, 0), 'status' => 'transit'],
            ['client_id' => 5, 'reference' => 'ORD-2026-003', 'division' => 'asca', 'items' => 'Body Jelly x20, Soap x30', 'total' => 450000, 'delivery_to' => 'Moshi', 'eta' => now()->setTime(15, 0), 'status' => 'processing'],
            ['client_id' => 7, 'reference' => 'ORD-2026-004', 'division' => 'asca', 'items' => 'Body Jelly x50, Cream x40', 'total' => 1100000, 'delivery_to' => 'Mwanza', 'eta' => now()->addDays(2)->setTime(10, 0), 'status' => 'processing'],
            ['client_id' => 12, 'reference' => 'ORD-2026-005', 'division' => 'ames', 'items' => 'Wheelchairs x5, Patient Beds x3', 'total' => 8500000, 'delivery_to' => 'Moshi', 'eta' => now()->addDays(3)->setTime(14, 0), 'status' => 'delayed'],
            ['client_id' => 11, 'reference' => 'ORD-2026-006', 'division' => 'aphamko', 'items' => 'Cough Syrup x200, Vitamins x500', 'total' => 980000, 'delivery_to' => 'Arusha', 'eta' => now()->subDay()->setTime(10, 0), 'status' => 'delivered'],
            ['client_id' => 2, 'reference' => 'ORD-2026-007', 'division' => 'ames', 'items' => 'Surgical Gloves x1000, Masks x2000', 'total' => 2200000, 'delivery_to' => 'Moshi', 'eta' => now()->subDays(2)->setTime(11, 0), 'status' => 'delivered'],
            ['client_id' => 8, 'reference' => 'ORD-2026-008', 'division' => 'amotech', 'items' => 'Web Hosting (Annual)', 'total' => 600000, 'delivery_to' => 'Online', 'eta' => now()->subDay(), 'status' => 'delivered'],
            ['client_id' => 10, 'reference' => 'ORD-2026-009', 'division' => 'aphamko', 'items' => 'Antibiotics x300, IV Fluids x200', 'total' => 1750000, 'delivery_to' => 'Dodoma', 'eta' => now()->addDays(4)->setTime(16, 0), 'status' => 'delayed'],
            ['client_id' => 5, 'reference' => 'ORD-2026-010', 'division' => 'asca', 'items' => 'Body Jelly x100, Soap x50', 'total' => 2100000, 'delivery_to' => 'Dar es Salaam', 'eta' => now()->subDays(2)->setTime(9, 0), 'status' => 'delivered'],
        ];

        foreach ($orders as $o) {
            Order::create($o);
        }

        // Inventory Items
        $items = [
            ['sku' => 'APH-001', 'name' => 'Amoxicillin 500mg', 'division' => 'aphamko', 'category' => 'Medication', 'quantity' => 0, 'reorder_level' => 200, 'unit_price' => 1500, 'supplier' => 'MediSupply TZ'],
            ['sku' => 'APH-002', 'name' => 'Paracetamol Syrup', 'division' => 'aphamko', 'category' => 'Medication', 'quantity' => 0, 'reorder_level' => 100, 'unit_price' => 2500, 'supplier' => 'MediSupply TZ'],
            ['sku' => 'APH-003', 'name' => 'Cough Syrup 100ml', 'division' => 'aphamko', 'category' => 'Medication', 'quantity' => 85, 'reorder_level' => 200, 'unit_price' => 3000, 'supplier' => 'Pharma Distributors'],
            ['sku' => 'APH-004', 'name' => 'Vitamin C Tablets', 'division' => 'aphamko', 'category' => 'Supplements', 'quantity' => 320, 'reorder_level' => 500, 'unit_price' => 1500, 'supplier' => 'Pharma Distributors'],
            ['sku' => 'APH-005', 'name' => 'IV Fluids 500ml', 'division' => 'aphamko', 'category' => 'Medical Supplies', 'quantity' => 15, 'reorder_level' => 100, 'unit_price' => 4500, 'supplier' => 'MediSupply TZ'],
            ['sku' => 'AME-001', 'name' => 'BP Monitor (Digital)', 'division' => 'ames', 'category' => 'Equipment', 'quantity' => 3, 'reorder_level' => 20, 'unit_price' => 180000, 'supplier' => 'MedEquip Ltd'],
            ['sku' => 'AME-002', 'name' => 'Stethoscope', 'division' => 'ames', 'category' => 'Equipment', 'quantity' => 45, 'reorder_level' => 50, 'unit_price' => 45000, 'supplier' => 'MedEquip Ltd'],
            ['sku' => 'AME-003', 'name' => 'Wheelchair', 'division' => 'ames', 'category' => 'Equipment', 'quantity' => 12, 'reorder_level' => 15, 'unit_price' => 350000, 'supplier' => 'MedEquip Ltd'],
            ['sku' => 'AME-004', 'name' => 'Surgical Gloves (Box)', 'division' => 'ames', 'category' => 'Consumables', 'quantity' => 1200, 'reorder_level' => 2000, 'unit_price' => 12000, 'supplier' => 'SafeHands TZ'],
            ['sku' => 'AME-005', 'name' => 'Patient Bed', 'division' => 'ames', 'category' => 'Equipment', 'quantity' => 0, 'reorder_level' => 10, 'unit_price' => 850000, 'supplier' => 'MedEquip Ltd'],
            ['sku' => 'ASC-001', 'name' => 'Body Jelly 500ml', 'division' => 'asca', 'category' => 'Skincare', 'quantity' => 8, 'reorder_level' => 50, 'unit_price' => 12000, 'supplier' => 'ASCA Production'],
            ['sku' => 'ASC-002', 'name' => 'Natural Soap', 'division' => 'asca', 'category' => 'Skincare', 'quantity' => 120, 'reorder_level' => 200, 'unit_price' => 5000, 'supplier' => 'ASCA Production'],
            ['sku' => 'ASC-003', 'name' => 'Face Cream 50ml', 'division' => 'asca', 'category' => 'Skincare', 'quantity' => 65, 'reorder_level' => 100, 'unit_price' => 15000, 'supplier' => 'ASCA Production'],
            ['sku' => 'ASC-004', 'name' => 'Body Lotion 300ml', 'division' => 'asca', 'category' => 'Skincare', 'quantity' => 4, 'reorder_level' => 50, 'unit_price' => 10000, 'supplier' => 'ASCA Production'],
            ['sku' => 'AMT-001', 'name' => 'Web Hosting (Annual)', 'division' => 'amotech', 'category' => 'Service', 'quantity' => 999, 'reorder_level' => 0, 'unit_price' => 600000, 'supplier' => 'Internal'],
            ['sku' => 'AMT-002', 'name' => 'SSL Certificate', 'division' => 'amotech', 'category' => 'Service', 'quantity' => 999, 'reorder_level' => 0, 'unit_price' => 150000, 'supplier' => 'Internal'],
        ];

        foreach ($items as $item) {
            InventoryItem::create($item);
        }
    }
}
