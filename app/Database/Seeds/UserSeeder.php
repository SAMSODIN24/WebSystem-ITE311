<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create admin user
        $admin_data = [
            'username' => 'admin',
            'email' => 'admin@lms.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'role' => 'admin',
            'first_name' => 'System',
            'last_name' => 'Administrator',
        ];
            $this->db->table('users')->insert($admin_data);
        
        // Create instructor user
        $instructor_data = [
            'username' => 'instructor1',
            'email' => 'instructor@lms.com',
            'password' => password_hash('instructor123', PASSWORD_DEFAULT),
            'role' => 'instructor',
            'first_name' => 'John',
            'last_name' => 'Doe',
        ];
            $this->db->table('users')->insert($instructor_data);
        
        // Create student users
        $student_data = [
            [
                'username' => 'student1',
                'email' => 'student1@lms.com',
                'password' => password_hash('student123', PASSWORD_DEFAULT),
                'role' => 'student',
                'first_name' => 'Jane',
                'last_name' => 'Smith',
            ],
            [
                'username' => 'student2',
                'email' => 'student2@lms.com',
                'password' => password_hash('student123', PASSWORD_DEFAULT),
                'role' => 'student',
                'first_name' => 'Bob',
                'last_name' => 'Johnson',
            ]
        ];
            $this->db->table('users')->insertBatch($student_data);
    }
}
