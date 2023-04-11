<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nationallity')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender');
            $table->string('country_code_primary')->nullable();
            $table->string('primary_mobile_number')->nullable();
            $table->string('country_code_secondary')->nullable();
            $table->string('secondary_mobile_number')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('location')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('currency')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('user_type')->nullable();
            $table->string('is_active')->nullable();
            $table->string('version_name')->nullable();
            $table->string('slot')->nullable();
            $table->string('business_logo')->nullable();
            $table->string('business_email')->nullable();
            $table->text('business_description')->nullable();
            $table->string('business_title')->nullable();
            $table->string('business_type')->nullable();
            $table->string('business_adrress')->nullable();
            $table->string('business_post_code')->nullable();
            $table->string('business_profile_visibility')->nullable();
            $table->string('business_size')->nullable();
            $table->string('business_website')->nullable();
            $table->string('business_facebook')->nullable();
            $table->string('business_twitter')->nullable();
            $table->string('business_instagram')->nullable();
            $table->string('business_linkdin')->nullable();
            $table->string('business_youtube')->nullable();
            $table->string('business_tiktok')->nullable();
            $table->string('trade_license_image')->nullable();
            $table->string('residence_country')->nullable();
            $table->string('visa_status')->nullable();
            $table->string('video_intro')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('paid');
            $table->dropColumn('nationallity');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('gender');
            $table->dropColumn('country_code_primary');
            $table->dropColumn('primary_mobile_number');
            $table->dropColumn('country_code_secondary');
            $table->dropColumn('secondary_mobile_number');
            $table->dropColumn('country');
            $table->dropColumn('city');
            $table->dropColumn('location');
            $table->dropColumn('time_zone');
            $table->dropColumn('currency');
            $table->dropColumn('profile_picture');
            $table->dropColumn('user_type');
            $table->dropColumn('is_active');
            $table->dropColumn('version_name');
            $table->dropColumn('slot');
            $table->dropColumn('business_logo');
            $table->dropColumn('business_email');
            $table->dropColumn('business_description');
            $table->dropColumn('business_title');
            $table->dropColumn('business_type');
            $table->dropColumn('business_adrress');
            $table->dropColumn('business_post_code');
            $table->dropColumn('business_profile_visibility');
            $table->dropColumn('business_size');
            $table->dropColumn('business_website');
            $table->dropColumn('business_facebook');
            $table->dropColumn('business_twitter');
            $table->dropColumn('business_instagram');
            $table->dropColumn('business_linkdin');
            $table->dropColumn('business_youtube');
            $table->dropColumn('business_tiktok');
            $table->dropColumn('trade_license_image');
            $table->dropColumn('residence_country');
            $table->dropColumn('visa_status');
            $table->dropColumn('video_intro');
        });
    }
};
