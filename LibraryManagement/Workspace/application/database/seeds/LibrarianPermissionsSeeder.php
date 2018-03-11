<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;

class LibrarianPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $borrowerRole = (new Role())->where('name', 'librarian')->first();

        $PermissionsForSuperAdmin = (new Permission())->whereIn('name', [
            'book.index',
            'book.create',
            'book.store',
            'book.show',
            'book.edit',
            'book.update',
            'book.destroy',

            'book.copy.create',
            'book.copy.store',

            'borrow-book.create',
            'borrow-book.store',

            'return-book.create',
            'return-book.store',
        ])->get()->toArray();

        $borrowerRole->attachPermissions($PermissionsForSuperAdmin);
    }
}
