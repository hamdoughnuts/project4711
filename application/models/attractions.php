<?php

/**
 * This is a model for attractions, but with temporary data
 *
 * @author glo and dtran
 */
class Attractions extends CI_Model {
        
        var $data = array(
        array(
            'id' => '01',
            'name' => 'Getto',
            'url' => 'Getto',
            'category' => 'eat',
            'image' => 'Getto-Amsterdam.jpg',
            'longtext' => 'Getto is a burger bar with a difference: each burger is named after a drag queen who performs there – keep an eye on the website if you\'re keen to catch an act. It describes itself as "an attitude-free zone, for gays, lesbians, bi, queers and straights". Relaxed and friendly, the bar staff mix great cocktails, and the interior has a chilled vibe. The burgers don\'t disappoint: try the Jennifer Hopelezz beef burger with guacamole and bacon, or the Dolly Bellefleur lamb burger with tzatziki and grilled courgette. They\'re served with chunky seasoned wedges and a mayo-heavy salad. And try the Gettopolitan – a cosmo made with Dutch Jenever liqueur.',
            'shortext' => 'A Burger bar with a difference, starting at €10, they open Tuesday-Thursday 4pm - 1am, Friday-Saturday 4pm - 2am, Sunday 4pm - Midnight',
            'contact' => '+31 20 421 5151',
            'address' => 'Warmoesstraat 51',
            'date' => '9/27/14'
            ),
        array(
            'id' => '02',
            'name' => 'Van Kerkwijk',
            'url' => 'Van_Kerkwijk',
            'category' => 'eat',
            'image' => 'Van-Kerkwijk.jpg',
            'longtext' => 'Tucked down the Nes – what looks like a back alley running south of Dam square – Van Kerkwijk is unprepossessing from outside, but inside it\'s habitually packed with customers at small wooden tables. They don\'t take reservations, so get there early and have a drink while you wait. There\'s no menu (in the ink-on-paper sense) so expect your waiter to recite a list of dishes. These range from French and Italian classics such as steak tartare and carpaccio, through to north African tagines and Indonesian curries. To start, try their house pâté, which is coarse, gamey and full of rustic French flavour. Van Kerkwijk\'s meat is generally good, with mercifully undercooked, well-seasoned steaks and generous, chunky chips.',
            'shortext' => 'Italien classics, come join the fun! Mains from €15. Open daily 11am-late',
            'contact' => '+31 20 620 3316',
            'address' => 'Warmoesstraat 51',
            'date' => '9/27/14'
            ),
        array(
            'id' => '03',
            'name' => 'De Zotte',
            'url' => 'De_Zotte',
            'category' => 'eat',
            'image' => 'De-Zotte.jpg',
            'longtext' => 'Don\'t go to de Zotte if you\'re teetotal. This "brown cafe" is a mecca for Belgian beer lovers, with several good brews on tap and scores more in bottles. To stop you getting too sozzled, a simple but filling menu is on offer. It\'s classic brown cafe fare: steaks with pepper, blue cheese or mushroom sauces, grilled lamb or chicken simply prepared. Non meat-eaters are also in for a treat: try De Zotte\'s hartige tart – essentially a deep-pan quiche. The filling changes, but generally involves some kind of cheese and green vegetables. It\'s huge, filling and feels like a hug on a cold day. Try it with sweet, dark bokbier on an autumn evening and breathe a contented sigh.',
            'shortext' => 'If you like beer, come here . Mains from €10. Open Sun-Thurs 4pm-1am, Fri, Sat 4pm-3am',
            'contact' => '+31 20 626 8694',
            'address' => 'Raamstraat 29',
            'date' => '9/27/14'
            ),
        array(
            'id' => '04',
            'name' => 'Restaurant Azmarino',
            'url' => 'Restaurant_Azmarino',
            'category' => 'eat',
            'image' => 'Restaurant-Azmarino.jpg',
            'longtext' => 'East African food isn\'t widely represented in Amsterdam, but where it is, you can expect generosity and pride in the cuisine. Azmarino\'s decor is cosy and kitsch, with a convivial atmosphere to match. The food is served in giant sharing platters, the base of which is formed by a layer of the slightly sour, spongy pancakes that are typical of the region, with a further pile of the pancakes on the side to mop up the juices. Dishes are hot, sour, sweet and spicy all at the same time: marinated, juicy chicken drumsticks, slow-cooked lamb, and lentil-based sauces. Small piles of salad dotted around the platter offer welcome cool relief from the chilli.',
            'shortext' => 'Taste the african culture. Mains from €9. Open Open Tues-Sat 5pm-11pm',
            'contact' => '+31 20 671 7587',
            'address' => '2e Sweelinckstraat 6',
            'date' => '9/27/14'
            ),
        array(
            'id' => '05',
            'name' => 'Hotel Seven One Seven 717',
            'url' => 'Hotel_Seven_One_Seven_717',
            'category' => 'sleep',
            'image' => 'Hotel-717-1.jpg',
            'longtext' => 'Seven one seven hotel offers unique canal-side establishment in a pleasant atmosphere with the utmost respect for privacy and comfort. The magnificent facade of the house, a monumental building, already indicates the beautiful interior. After entering, the marble floor is revealed with a solid oak staircase leading to two enchanting suites. These have a view towards the Prinsengracht at the front of the house. The stairs also lead to the six roomy suites and rooms at the back that look out on the patio.',
            'shortext' => '5 Stars, 8 Rooms, build in the 1600\'s',
            'contact' => '+31 20 427 0717',
            'address' => 'Prinsengracht 717, 1017 JW',
            'date' => '9/27/14'
            ),
        array(
            'id' => '06',
            'name' => 'The College Hotel',
            'url' => 'The_College_Hotel',
            'category' => 'sleep',
            'image' => 'The-College-Hotel.jpg',
            'longtext' => 'The College Hotel is located in a historic former school building. A sense of history is mirrored in the tall ceilings, comforting fireplaces and stretching staircases. The College Hotel perfectly blends Amsterdam\'s aristocratic style of times gone with the energy and the design that marks this city as a youthful Mecca. It is 5 minutes walking distance from the main museum district and Amsterdam\'s exclusive shopping area, and 10 minutes walking distance from the city centre.',
            'shortext' => '5 Stars, 30 Rooms, build in 2004',
            'contact' => '+31 20 571 1511',
            'address' => 'Roelof Hartstraat 1, 1071 VE',
            'date' => '9/27/14'
            ),
        array(
            'id' => '07',
            'name' => 'Grand Hotel Amrath Amsterdam',
            'url' => 'Grand_Hotel_Amrath_Amsterdam',
            'category' => 'sleep',
            'image' => 'Grand-Hotel-Amrath.jpg',
            'longtext' => 'Welcome to the Grand Hotel Amrath Amsterdam, the latest five star Deluxe hotel situated right in the heart of the city. The 165 spacious rooms and suites feature the latest in comfort, style and facilities, decorated in the Art Deco style of the building. The hotel was established in the monumental Shipping House and has splendid views over the Amsterdam canals and the river IJ.',
            'shortext' => '5 Stars, 165 Rooms, build in 2007',
            'contact' => '+31 20 552 0000',
            'address' => 'Prins Hendrikkade 108, 1011 AK',
            'date' => '9/27/14'
        ),
            array(
                'id' => '08',
                'name' => 'Van Gogh Museum',
                'url' => 'Van_Gogh_Museum',
                'category' => 'play',
                'image' => 'Van-Gogh-Museum.jpg',
                'longtext' => 'Amsterdam Van Gogh Museum maintains the world’s largest collection of the works of the world’s most popular artist - Vincent van Gogh (1853-1890), his paintings, drawings and letters, completed with the art of his contemporaries. Each year, 1.6 million visitors come to the Van Gogh Museum, making it one of the 25 most popular museums in the world.',
                'contact' => '+31 20 552 0000',
                'address' => 'Prins Hendrikkade 108, 1011 AK',
                'date' => '9/27/14'
            ),
            array(
                'id' => '09',
                'name' => 'Anne Franks House',
                'url' => 'Anne_Franks_house',
                'category' => 'play',
                'image' => 'Anne_Franks_House.jpg',
                'longtext' => 'Amsterdam Van Gogh Museum maintains the world’s largest collection of the works of the world’s most popular artist - Vincent van Gogh (1853-1890), his paintings, drawings and letters, completed with the art of his contemporaries. Each year, 1.6 million visitors come to the Van Gogh Museum, making it one of the 25 most popular museums in the world.',
                'contact' => '+31 20 556 7100',
                'address' => 'Prinsengracht 263-267, 1016 GV',
                'date' => '9/27/14'
            ),
            array(
                'id' => '10',
                'name' => 'Heineken Experience',
                'url' => 'Heineken_Experience',
                'category' => 'play',
                'image' => 'Heineken_Experience.jpg',
                'longtext' => 'There is something secretive about the taste of the world’s best beers and certainly Heineken pilsner belongs to this group. The brewery was established in Amsterdam in 1864 and today Heineken is a huge multinational company, one of the three largest beer producers in the world. Throughout its history, Heineken remained by and large family company, with Charlene de Carvalho-Heineken as its biggest stockholder and her husband Michel on the company’s board. Heineken rich and successful history has been presented in their old defunct brewery in Amsterdam, with several amusement park attractions added to the exhibit and renamed as Amsterdam Heineken Experience.',
                'contact' => '+31 20 523 9222',
                'address' => 'Stadhouderskade 78, 1072 AE',
                'date' => '9/27/14'
            ),
    );

    // Constructor
    public function __construct() {
        parent::__construct();
    }

    // retrieve a single attraction
    public function getByID($id) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if ($record['id'] == $id)
                return $record;
        return null;
    }
    
    public function getByCategory($category) {
        $records = array();
        foreach ($this->data as $record)
            if ($record['category'] == $category)
                $records[] = $record;
        return $records;
    }
    
    // retrieve all of the attractions
    public function getAll() {
        return $this->data;
    }

    // retrieve the first quote
    public function first() {
        return $this->data[0];
    }

    // retrieve the last quote
    public function last() {
        $index = count($this->data) - 1;
        return $this->data[$index];
    }

}
