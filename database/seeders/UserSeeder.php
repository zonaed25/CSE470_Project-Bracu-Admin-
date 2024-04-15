use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'department_id' => 1, 
            'email' => 'admin@gmail.com',
            'role' => '1', 
            'password' => Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
