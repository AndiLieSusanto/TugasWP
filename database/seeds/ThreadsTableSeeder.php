<?php

use Illuminate\Database\Seeder;
use App\Thread;
class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thread = new Thread();
        $thread->name = 'The most beautiful k-drama artist';
        $thread->description = 'This forum discuss about all k-drama artist';
        $thread->status = random_int(0, 1);
        $thread->category_id = random_int(1,3);
        $thread->save();
        $thread->user()->sync([1]);

        $thread = new Thread();
        $thread->name = 'Foodtech';
        $thread->description = 'Discuss about food technology';
        $thread->status = random_int(0, 1);
        $thread->category_id = random_int(1,3);
        $thread->save();
        $thread->user()->sync([1]);

        $thread = new Thread();
        $thread->name = 'Brain Work';
        $thread->description = 'Discuss about how brain work';
        $thread->status = random_int(0, 1);
        $thread->category_id = random_int(1,3);
        $thread->save();
        $thread->user()->sync([1]);

        $thread = new Thread();
        $thread->name = 'Fortnite Week 8 Challenges Guide';
        $thread->description = 'Guides about week 8 challenges';
        $thread->status = random_int(0, 1);
        $thread->category_id = random_int(1,3);
        $thread->save();
        $thread->user()->sync([2]);

        $thread = new Thread();
        $thread->name = 'Issues with launching rocket';
        $thread->description = 'Discuss issues related to launching rocket';
        $thread->status = random_int(0, 1);
        $thread->category_id = random_int(1,3);
        $thread->save();
        $thread->user()->sync([2]);

        $thread = new Thread();
        $thread->name = 'Fortnite Bugs';
        $thread->description = 'Discuss about any bugs in fortnit';
        $thread->status = random_int(0, 1);
        $thread->category_id = random_int(1,3);
        $thread->save();
        $thread->user()->sync([2]);
    }
}
