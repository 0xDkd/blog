<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Faker\Generator::class);

        $avatars = [
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/s5ehp11z6s.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/Lhd1SHqu86.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/LOnMrqbHJn.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/xAuDMxteQy.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/ZqM7iaP4CR.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/NDnzMutoxX.png?imageView2/1/w/200/h/200',
        ];

        $users = factory(User::class)->times(50)->make()->each(function ($user,$index) use($faker,$avatars){
            $user->avatar = $faker->randomElement($avatars);
        });

        User::insert($users->makeVisible(['password','remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'Test';
        $user->password = bcrypt('zxcvbnm');
        $user->email = 'test@qq.com';
        $user->nickname = 'A酱';
        $user->avatar = 'http://blog.test/uploads/images/avatars/201806/26/1_1530000595_ohltc5Tn2L.png';
        $user->introduction = '一个没有任何存在感的人，划水划水';
        $user->save();
    }
}
