<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('slides')->insert([
            ['id' => 1,'small_text' => '{"en":"Direct Ventures provides the first Anti-Money Laundry Solution in the UAE !"}','big_text' => '{"en":"We will be launching this spring 2023!"}','image' => 'template/img/carousel-1.jpg'],
            ['id' => 2,'small_text' => '{"en":"Direct Ventures will also be providing the first digital Corporate Background Check in the Arab world and will be launched this summer 2023!"}','big_text' => '{"en":""}','image' => 'template/img/carousel-2.jpg'],
            ['id' => 3,'small_text' => '{"en":"By Autumn 2023, we will have the first version of social regtech platform in MENA!"}','big_text' => '{"en":""}','image' => 'template/img/carousel-1.jpg'],
        ]);

        DB::table('abouts')->insert([
            ['id' => 1,'name' => '{"en":"About Us"}','title' => '{"en":"The first all around Social Regtech provider in the Arab world and it will be ready this fall!"}','description' => '{"en":"Direct Ventures is the first RegTech Superapp created to provide an intuitive platform that offers users a one-stop-shop solution for all of their due diligence and compliance needs. As a RegTech Superapp, the Direct Ventures platform acts as a focal medium that interconnects with, and provides access to, various other RegTech companies, each of whom specializes in their own discreet due diligence or compliance services or with respect to a particular region or market. In doing so, Direct Ventures provides companies, professional service providers, businessmen and investors with a central forum from which they can access solutions for any and all due diligence, compliance, verification, anti-money laundering or general regulatory matters."}', 'image' => 'template/img/about.jpg'],
        ]);

        DB::table('whies')->insert([
            ['id' => 1,'name' => '{"en":"WHY CHOOSE US"}','title' => '{"en":"We Are Here to Grow Your Business Exponentially"}','image' => 'template/img/feature.jpg','why1_title' => '{"en":"First Regtech Superapp globally"}','why1_description' => '{"en":""}','why1_icon' => 'fa fa-cubes','why2_title' => '{"en":"Customised for the Arab world"}','why2_description' => '{"en":""}','why2_icon' => 'fa fa-award','why3_title' => '{"en":"Highly experienced team"}','why3_description' => '{"en":""}','why3_icon' => 'fa fa-users-cog','why4_title' => '{"en":"24/7 Support"}','why4_description' => '{"en":""}','why4_icon' => 'fa fa-phone-alt',],
        ]);

        DB::table('services')->insert([
            ['id' => 1,'name' => '{"en":"OUR SERVICES"}','title' => '{"en":"Custom IT Solutions for Your Successful Business"}'],
        ]);

        DB::table('microservices')->insert([
            ['id' => 1,'title' => '{"en":"Anti Monies Solution"}','description' => '{"en":""}', 'icon' => 'fa fa-shield-alt'],
            ['id' => 2,'title' => '{"en":"Investigative Reports"}','description' => '{"en":""}', 'icon' => 'fa fa-shield-alt'],
            ['id' => 3,'title' => '{"en":"Online contracting system"}','description' => '{"en":""}', 'icon' => 'fa fa-shield-alt'],
            ['id' => 4,'title' => '{"en":"Product Management system"}','description' => '{"en":""}', 'icon' => 'fa fa-shield-alt'],
            ['id' => 5,'title' => '{"en":"Verification"}','description' => '{"en":""}', 'icon' => 'fa fa-shield-alt'],
            ['id' => 6,'title' => '{"en":"Communication Modules"}','description' => '{"en":""}', 'icon' => 'fa fa-shield-alt'],
        ]);

        DB::table('contacts')->insert([
            ['id' => 1,'name' => '{"en":"PLEASE FEEL FREE TO CONTACT US"}','title' => '{"en":"Need A Free Quote? Please Feel Free to Contact Us"}','description' => '{"en":"Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed."}'],
        ]);

        DB::table('teams')->insert([
            ['id' => 1,'name' => '{"en":"TEAM MEMBERS"}','title' => '{"en":"Professional Stuffs Ready to Help Your Business"}'],
        ]);

        DB::table('members')->insert([
            ['id' => 1,'name'=>'{"en":"Mohammad Sabbah"}','position'=>'{"en":"CEO"}','image'=>'template/img/team-1.jpg','twitter'=>'https://twitter.com','facebook'=>'','instagram'=>'','linkedin'=>'',],
            ['id' => 2,'name'=>'{"en":"Mohammad Sabbah"}','position'=>'{"en":"CEO"}','image'=>'template/img/team-2.jpg','twitter'=>'https://twitter.com','facebook'=>'','instagram'=>'','linkedin'=>'',],
            ['id' => 3,'name'=>'{"en":"Mohammad Sabbah"}','position'=>'{"en":"CEO"}','image'=>'template/img/team-3.jpg','twitter'=>'https://twitter.com','facebook'=>'','instagram'=>'','linkedin'=>'',],
        ]);
    }
}
