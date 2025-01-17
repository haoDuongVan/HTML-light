<?php
class Booking extends Model {
    public function addBooking($data) {
        $stmt = $this->db->prepare("INSERT INTO bookings (name, phone, date, time, guests) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([
            $data['name'],
            $data['phone'],
            $data['date'],
            $data['time'],
            $data['guests']
        ]);
    }
}
?>
