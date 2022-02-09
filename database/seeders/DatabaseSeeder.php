<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            'id' => "1",
            'name' => "Admin",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('roles')->insert([
            'id' => "2",
            'name' => "User",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        for ($i = 0; $i < 10; $i++){
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => "1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        }
        for ($i = 10; $i < 20; $i++){
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => "2",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
       
        DB::table('categories')->insert([
            'name' => "WORLD",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "BUSINESS",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "TRAVEL",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "SCIENCE",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "VIDEO",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "HEALTH",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => "SPORTS",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => "TECH",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => "MILITARY",
            'parent_id' => "1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "POLITICS & GOVERMENT",
            'parent_id' => "1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "STATISTICS",
            'parent_id' => "1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "INTERNATIONAL",
            'parent_id' => "2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "STOCK",
            'parent_id' => "2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "ENTERPRISE",
            'parent_id' => "2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "PRODUCT",
            'parent_id' => "8",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "ADVISORY",
            'parent_id' => "6",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'name' => "NUTRITION",
            'parent_id' => "6",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        for ($i = 1; $i < 5; $i++){
            DB::table('posts')->insert([
                'title' => "Charlize Theron Selling Los Angeles Bungalow".$i,
                'body' => "Built in 1925, the home spans just over 2,000 square feet and is centered around an open-plan living, dining and kitchen space complete with high ceilings, skylights and oversized windows, according to the listing with David Gray of Berkshire Hathaway HomeServices California Properties, who did not immediately respond to a request for comment.

                Further skylights illuminate the hallway, which leads to the home’s four bedrooms, including the primary suite with generous closets and French doors that open out onto the garden.
                
                Outside, the hedge-lined yard is home to a pool and a detached studio with vaulted ceilings.
                
                The star won't be taking home much of a profit on the sale, considering she paid $1.84 million for the home almost 15 years ago at the end of 2005, according to listing records.
                
                From Penta: How Fashion Designers Are Adapting to the Era of Masks
                
                Records with Propertyshark show Ms. Theron, 45, owns the home through a trust in her mother’s name.
                
                She scooped the Academy Award for Best Actress in 2004 for her role in “Monster,” and earned nominations in 2006 for “North Country,” and earlier this year for her portrayal of Megyn Kelly in “Bombshell.”",
                'category_id' => "10",
                'author_id' => "1",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
        for ($i = 5; $i < 8; $i++){
            DB::table('posts')->insert([
                'title' => "The Republican Party is enabling Trump's politics of violence".$i,
                'body' => "(CNN)The Republican Party is ever closer to the destination to which it has long been headed under former President Donald Trump -- the legitimization of violence as a form of political expression.

                The Republican National Committee's censure of GOP Reps. Liz Cheney and Adam Kinzinger for probing the legitimate political discourse of the January 6 insurrection enshrined that principle in the party's policy dogma. The move on Friday underscored the untethered extremism of large sections of one of America's great political parties and the still malignant, dominant influence of the ex-President, who is ready for action with a $122 million war chest.
                The RNC's declaration coincided with the release of new video by the Department of Justice showing the horrific truth of the insurrection -- a Trump mob, high on his election lies, beating up police officers and vowing to drag lawmakers through the streets. But the RNC's authoritarian was at odds with some anti-Trump stirrings elsewhere in the party, most noticeably from ex-Vice President Mike Pence, who criticized his ex-boss' demand that he steal the election by subverting the Electoral College count last year as un-American.",
                'category_id' => "11",
                'author_id' => "2",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
        for ($i = 8; $i < 10; $i++){
            DB::table('posts')->insert([
                'title' => "The Republican Party is enabling Trump's politics of violence".$i,
                'body' => "(CNN)The Republican Party is ever closer to the destination to which it has long been headed under former President Donald Trump -- the legitimization of violence as a form of political expression.

                The Republican National Committee's censure of GOP Reps. Liz Cheney and Adam Kinzinger for probing the legitimate political discourse of the January 6 insurrection enshrined that principle in the party's policy dogma. The move on Friday underscored the untethered extremism of large sections of one of America's great political parties and the still malignant, dominant influence of the ex-President, who is ready for action with a $122 million war chest.
                The RNC's declaration coincided with the release of new video by the Department of Justice showing the horrific truth of the insurrection -- a Trump mob, high on his election lies, beating up police officers and vowing to drag lawmakers through the streets. But the RNC's authoritarian was at odds with some anti-Trump stirrings elsewhere in the party, most noticeably from ex-Vice President Mike Pence, who criticized his ex-boss' demand that he steal the election by subverting the Electoral College count last year as un-American.",
                'category_id' => "12",
                'author_id' => "2",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
        for ($i = 10; $i < 15; $i++){
            DB::table('posts')->insert([
                'title' => "The Republican Party is enabling Trump's politics of violence".$i,
                'body' => "(CNN)The Republican Party is ever closer to the destination to which it has long been headed under former President Donald Trump -- the legitimization of violence as a form of political expression.

                The Republican National Committee's censure of GOP Reps. Liz Cheney and Adam Kinzinger for probing the legitimate political discourse of the January 6 insurrection enshrined that principle in the party's policy dogma. The move on Friday underscored the untethered extremism of large sections of one of America's great political parties and the still malignant, dominant influence of the ex-President, who is ready for action with a $122 million war chest.
                The RNC's declaration coincided with the release of new video by the Department of Justice showing the horrific truth of the insurrection -- a Trump mob, high on his election lies, beating up police officers and vowing to drag lawmakers through the streets. But the RNC's authoritarian was at odds with some anti-Trump stirrings elsewhere in the party, most noticeably from ex-Vice President Mike Pence, who criticized his ex-boss' demand that he steal the election by subverting the Electoral College count last year as un-American.",
                'category_id' => "9",
                'author_id' => "2",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
        for ($i = 15; $i < 18; $i++){
            DB::table('posts')->insert([
                'title' => "The Republican Party is enabling Trump's politics of violence".$i,
                'body' => "(CNN)The Republican Party is ever closer to the destination to which it has long been headed under former President Donald Trump -- the legitimization of violence as a form of political expression.

                The Republican National Committee's censure of GOP Reps. Liz Cheney and Adam Kinzinger for probing the legitimate political discourse of the January 6 insurrection enshrined that principle in the party's policy dogma. The move on Friday underscored the untethered extremism of large sections of one of America's great political parties and the still malignant, dominant influence of the ex-President, who is ready for action with a $122 million war chest.
                The RNC's declaration coincided with the release of new video by the Department of Justice showing the horrific truth of the insurrection -- a Trump mob, high on his election lies, beating up police officers and vowing to drag lawmakers through the streets. But the RNC's authoritarian was at odds with some anti-Trump stirrings elsewhere in the party, most noticeably from ex-Vice President Mike Pence, who criticized his ex-boss' demand that he steal the election by subverting the Electoral College count last year as un-American.",
                'category_id' => "10",
                'author_id' => "2",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
        for ($i = 18; $i < 22; $i++){
            DB::table('posts')->insert([
                'title' => "The Republican Party is enabling Trump's politics of violence".$i,
                'body' => "(CNN)The Republican Party is ever closer to the destination to which it has long been headed under former President Donald Trump -- the legitimization of violence as a form of political expression.

                The Republican National Committee's censure of GOP Reps. Liz Cheney and Adam Kinzinger for probing the legitimate political discourse of the January 6 insurrection enshrined that principle in the party's policy dogma. The move on Friday underscored the untethered extremism of large sections of one of America's great political parties and the still malignant, dominant influence of the ex-President, who is ready for action with a $122 million war chest.
                The RNC's declaration coincided with the release of new video by the Department of Justice showing the horrific truth of the insurrection -- a Trump mob, high on his election lies, beating up police officers and vowing to drag lawmakers through the streets. But the RNC's authoritarian was at odds with some anti-Trump stirrings elsewhere in the party, most noticeably from ex-Vice President Mike Pence, who criticized his ex-boss' demand that he steal the election by subverting the Electoral College count last year as un-American.",
                'category_id' => "16",
                'author_id' => "2",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
        for ($i = 22; $i < 25; $i++){
            DB::table('posts')->insert([
                'title' => "The Republican Party is enabling Trump's politics of violence".$i,
                'body' => "(CNN)The Republican Party is ever closer to the destination to which it has long been headed under former President Donald Trump -- the legitimization of violence as a form of political expression.

                The Republican National Committee's censure of GOP Reps. Liz Cheney and Adam Kinzinger for probing the legitimate political discourse of the January 6 insurrection enshrined that principle in the party's policy dogma. The move on Friday underscored the untethered extremism of large sections of one of America's great political parties and the still malignant, dominant influence of the ex-President, who is ready for action with a $122 million war chest.
                The RNC's declaration coincided with the release of new video by the Department of Justice showing the horrific truth of the insurrection -- a Trump mob, high on his election lies, beating up police officers and vowing to drag lawmakers through the streets. But the RNC's authoritarian was at odds with some anti-Trump stirrings elsewhere in the party, most noticeably from ex-Vice President Mike Pence, who criticized his ex-boss' demand that he steal the election by subverting the Electoral College count last year as un-American.",
                'category_id' => "15",
                'author_id' => "2",
                'created_at' => Carbon::now()->format('Y-m-d H:i'),
            ]);
        }
        for ($i = 25; $i < 29; $i++){
            DB::table('posts')->insert([
                'title' => "The Republican Party is enabling Trump's politics of violence".$i,
                'body' => "(CNN)The Republican Party is ever closer to the destination to which it has long been headed under former President Donald Trump -- the legitimization of violence as a form of political expression.

                The Republican National Committee's censure of GOP Reps. Liz Cheney and Adam Kinzinger for probing the legitimate political discourse of the January 6 insurrection enshrined that principle in the party's policy dogma. The move on Friday underscored the untethered extremism of large sections of one of America's great political parties and the still malignant, dominant influence of the ex-President, who is ready for action with a $122 million war chest.
                The RNC's declaration coincided with the release of new video by the Department of Justice showing the horrific truth of the insurrection -- a Trump mob, high on his election lies, beating up police officers and vowing to drag lawmakers through the streets. But the RNC's authoritarian was at odds with some anti-Trump stirrings elsewhere in the party, most noticeably from ex-Vice President Mike Pence, who criticized his ex-boss' demand that he steal the election by subverting the Electoral College count last year as un-American.",
                'category_id' => "3",
                'author_id' => "2",
                'created_at' => Carbon::now()->format('Y-m-d H:i'),
            ]);
        }
        for ($i = 29; $i < 32; $i++){
            DB::table('posts')->insert([
                'title' => "The Republican Party is enabling Trump's politics of violence".$i,
                'body' => "(CNN)The Republican Party is ever closer to the destination to which it has long been headed under former President Donald Trump -- the legitimization of violence as a form of political expression.

                The Republican National Committee's censure of GOP Reps. Liz Cheney and Adam Kinzinger for probing the legitimate political discourse of the January 6 insurrection enshrined that principle in the party's policy dogma. The move on Friday underscored the untethered extremism of large sections of one of America's great political parties and the still malignant, dominant influence of the ex-President, who is ready for action with a $122 million war chest.
                The RNC's declaration coincided with the release of new video by the Department of Justice showing the horrific truth of the insurrection -- a Trump mob, high on his election lies, beating up police officers and vowing to drag lawmakers through the streets. But the RNC's authoritarian was at odds with some anti-Trump stirrings elsewhere in the party, most noticeably from ex-Vice President Mike Pence, who criticized his ex-boss' demand that he steal the election by subverting the Electoral College count last year as un-American.",
                'category_id' => "4",
                'author_id' => "2",
                'created_at' => Carbon::now()->format('Y-m-d H:i'),
            ]);
        }
        for ($i = 33; $i < 36; $i++){
            DB::table('posts')->insert([
                'title' => "The Republican Party is enabling Trump's politics of violence".$i,
                'body' => "(CNN)The Republican Party is ever closer to the destination to which it has long been headed under former President Donald Trump -- the legitimization of violence as a form of political expression.

                The Republican National Committee's censure of GOP Reps. Liz Cheney and Adam Kinzinger for probing the legitimate political discourse of the January 6 insurrection enshrined that principle in the party's policy dogma. The move on Friday underscored the untethered extremism of large sections of one of America's great political parties and the still malignant, dominant influence of the ex-President, who is ready for action with a $122 million war chest.
                The RNC's declaration coincided with the release of new video by the Department of Justice showing the horrific truth of the insurrection -- a Trump mob, high on his election lies, beating up police officers and vowing to drag lawmakers through the streets. But the RNC's authoritarian was at odds with some anti-Trump stirrings elsewhere in the party, most noticeably from ex-Vice President Mike Pence, who criticized his ex-boss' demand that he steal the election by subverting the Electoral College count last year as un-American.",
                'category_id' => "5",
                'author_id' => "2",
                'created_at' => Carbon::now()->format('Y-m-d H:i'),
            ]);
        }
        for ($i = 37; $i < 40; $i++){
            DB::table('posts')->insert([
                'title' => "The Republican Party is enabling Trump's politics of violence".$i,
                'body' => "(CNN)The Republican Party is ever closer to the destination to which it has long been headed under former President Donald Trump -- the legitimization of violence as a form of political expression.

                The Republican National Committee's censure of GOP Reps. Liz Cheney and Adam Kinzinger for probing the legitimate political discourse of the January 6 insurrection enshrined that principle in the party's policy dogma. The move on Friday underscored the untethered extremism of large sections of one of America's great political parties and the still malignant, dominant influence of the ex-President, who is ready for action with a $122 million war chest.
                The RNC's declaration coincided with the release of new video by the Department of Justice showing the horrific truth of the insurrection -- a Trump mob, high on his election lies, beating up police officers and vowing to drag lawmakers through the streets. But the RNC's authoritarian was at odds with some anti-Trump stirrings elsewhere in the party, most noticeably from ex-Vice President Mike Pence, who criticized his ex-boss' demand that he steal the election by subverting the Electoral College count last year as un-American.",
                'category_id' => "17",
                'author_id' => "2",
                'created_at' => Carbon::now()->format('Y-m-d H:i'),
            ]);
        }
        for ($i = 40; $i < 44; $i++){
            DB::table('posts')->insert([
                'title' => "The Republican Party is enabling Trump's politics of violence".$i,
                'body' => "(CNN)The Republican Party is ever closer to the destination to which it has long been headed under former President Donald Trump -- the legitimization of violence as a form of political expression.

                The Republican National Committee's censure of GOP Reps. Liz Cheney and Adam Kinzinger for probing the legitimate political discourse of the January 6 insurrection enshrined that principle in the party's policy dogma. The move on Friday underscored the untethered extremism of large sections of one of America's great political parties and the still malignant, dominant influence of the ex-President, who is ready for action with a $122 million war chest.
                The RNC's declaration coincided with the release of new video by the Department of Justice showing the horrific truth of the insurrection -- a Trump mob, high on his election lies, beating up police officers and vowing to drag lawmakers through the streets. But the RNC's authoritarian was at odds with some anti-Trump stirrings elsewhere in the party, most noticeably from ex-Vice President Mike Pence, who criticized his ex-boss' demand that he steal the election by subverting the Electoral College count last year as un-American.",
                'category_id' => "13",
                'author_id' => "2",
                'created_at' => Carbon::now()->format('Y-m-d H:i'),
            ]);
        }
        for ($i = 44; $i < 47; $i++){
            DB::table('posts')->insert([
                'title' => "violences",
                'body' => "(CNN)The Republican Party is ever closer to the destination to which it has long been headed under former President Donald Trump -- the legitimization of violence as a form of political expression.

                The Republican National Committee's censure of GOP Reps. Liz Cheney and Adam Kinzinger for probing the legitimate political discourse of the January 6 insurrection enshrined that principle in the party's policy dogma. The move on Friday underscored the untethered extremism of large sections of one of America's great political parties and the still malignant, dominant influence of the ex-President, who is ready for action with a $122 million war chest.
                The RNC's declaration coincided with the release of new video by the Department of Justice showing the horrific truth of the insurrection -- a Trump mob, high on his election lies, beating up police officers and vowing to drag lawmakers through the streets. But the RNC's authoritarian was at odds with some anti-Trump stirrings elsewhere in the party, most noticeably from ex-Vice President Mike Pence, who criticized his ex-boss' demand that he steal the election by subverting the Electoral College count last year as un-American.",
                'category_id' => "14",
                'author_id' => "2",
                'created_at' => Carbon::now()->format('Y-m-d H:i'),
            ]);
        }
        for ($i = 1; $i < 50; $i++){
            DB::table('images')->insert([
                'imageable_type' => "App\Models\Post",
                'imageable_id' => $i,
                'link' => '\img\anh-meo-cute-nhat-9.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i'),
            ]);
        }
    
    }
}