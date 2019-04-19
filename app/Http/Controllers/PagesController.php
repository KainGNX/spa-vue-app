<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        $aboutData = [
            'title' => 'About',
            'content' => '<p>This is the "About" content that has come from a simple api request. Now for Ancient Alien ipsum.</p>
                <p>Ancient alien mercury sanskrit Easter island portal flying vessels, inter-dimensional electromagnetic earth mound grey Mayan, kachina doll contend extraterrestrial magnetic current worm hole. Cover up cover up Annunaki star people, contend portal Nazca lines Indian texts Mayan, contend ancient alien theorists aircraft. Von Daniken, Chariot of the Gods vortex.</p>
                <p>Ancient alien astronaut otherworldly visitors clearly Nazca lines, targeted mutation spaceships anti-gravity clearly von Daniken mystery, Annunaki spaceships worm hole UFO elongated skull. Inter-dimensional otherworldly visitors legendary times alien extraterrestrial origin, golden disk vortex pyramids the vedas, legendary times mercury aircraft mercury clearly, ancient religions mercury spaceships UFO SETI Mayan.</p>
                <p>Ancient alien cover up ancient god anti-gravity Vymaanika-Shaastra grey, ancient religions electromagnetic targeted mutation pyramids Indian texts extraterrestrial. Anti-gravity ancient religions anti-gravity clearly SETI Ezekiel mystery electromagnetic legendary times aircraft, ancient god worm hole portal petroglyph Ezekiel vortex extraterrestrial anti-gravity, space brothers space travel clearly sanskrit extraterrestrial origin Machu Picchu.</p>
            '
        ];
        return response()->json($aboutData);
    }

    public function contact() {

        $contactData = [
            'title' => 'Contact',
            'content' => '<p>This is the "Contact" content that has come from a simple api request. Now for Ancient Alien ipsum.</p>
                <p>Ancient alien burmuta triangle portal, I know it sounds crazy..., Megoliths Easter island. Space brothers Indian texts I know it sounds crazy... Worm hole petroglyph gods electromagnetic otherworldly visitors, alien Chariot of the Gods ancient civilization pre-colonial aerodynamics otherworldly visitors stonehenge. I know it sounds crazy... Weightless, space time.</p>
                <p>Ancient alien contend electromagnetic otherworldly visitors kachina doll, King Soloman space time space brothers. Mercury Sumerian texts I know it sounds crazy... Easter island mercury Giorgio clearly, weightless elongated skull space travel worm hole contend UFO weightless Mayan, cover up technology contend kachina doll gods.</p>
                <p>Ancient alien space brothers flying vessels kachina doll space time, space brothers astronaut star people aircraft choral castle Vymaanika-Shaastra vimana, DNA manipulation Sumerian texts Giorgio electromagnetic Nazca lines. Star gates spaceships anti-gravity ancient religions Vymaanika-Shaastra megoliths weightless clearly, sightings ancient civilization. The answer is a resounding YES... Helicopter heiroglyph.</p>
            '
        ];

        return response()->json($contactData);
    }
}
