<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "Section 1",
                "content" => "
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel facilisis sapien. Sed quis viverra quam, vitae commodo sem. Vivamus id odio tincidunt, porta nulla id, placerat nulla. Suspendisse potenti. Pellentesque eu orci sed ipsum euismod finibus eget a enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut a ligula id erat gravida posuere. Aenean nec est suscipit, laoreet ante ut, pharetra lacus. In in facilisis nunc. Duis efficitur libero quis lectus euismod molestie. Curabitur sapien dui, vulputate eget malesuada eu, gravida eget erat. Mauris sodales in tellus sed laoreet. Ut sed magna neque.

                    Vivamus est diam, molestie id nibh at, facilisis tempor urna. Maecenas et cursus odio. Pellentesque dolor neque, laoreet et nibh fringilla, tincidunt dignissim mi. Pellentesque vel diam in turpis viverra efficitur. Nulla elementum metus et tempus elementum. Praesent non erat ut purus dapibus vestibulum. In finibus dolor nec nisi fermentum euismod.
                    
                    Proin vel quam viverra erat finibus euismod quis nec dolor. Phasellus faucibus semper nulla. Curabitur quis erat facilisis, finibus ligula eget, malesuada tortor. In at vehicula elit, in imperdiet purus. Nulla tincidunt efficitur leo, vel aliquet ligula commodo eu. Donec nisl urna, consequat eu nibh non, dictum pharetra eros. Ut semper enim mi, sed bibendum ipsum tempus sed. Phasellus dui tortor, tristique quis fringilla a, faucibus quis eros. Vivamus egestas vitae neque at tristique. Sed tempus quam mattis lacus tincidunt, et fringilla mauris consectetur.
                "
            ],
            [
                "name" => "Section 2",
                "content" => "
                    Etiam id quam ornare, consectetur massa quis, facilisis metus. Praesent sodales posuere arcu, vitae consequat diam laoreet eu. Cras at lorem nec nibh mollis dictum in eu dui. Aliquam efficitur neque eget metus auctor, id blandit sem tempus. Ut interdum turpis non euismod pellentesque. Pellentesque urna nunc, porta id ligula et, volutpat consequat leo. Aenean congue aliquet tincidunt.

                    Curabitur feugiat in diam nec tristique. Integer aliquet nisl eu urna interdum gravida. Nulla in nibh velit. Donec sodales neque elit, sed faucibus augue pharetra nec. Duis faucibus porttitor nisi sit amet commodo. Cras mattis cursus nunc a dignissim. Donec sodales sapien mi, vitae mollis arcu pellentesque sed.
                "
            ],
            [
                "name" => "Section 3",
                "content" => "
                    Donec id interdum ante. Pellentesque sed semper est. Phasellus eget venenatis dolor. Aliquam sit amet egestas nisi. Mauris eu arcu lacinia urna efficitur imperdiet vel id elit. Cras vulputate dui in ornare rutrum. Quisque eget suscipit mi. Duis et faucibus massa. In faucibus efficitur augue ac consequat.

                    Morbi ullamcorper eros augue, et porttitor odio posuere sit amet. Nunc nec quam nunc. Sed blandit, nisl ut dictum placerat, massa nunc varius velit, eget pretium augue eros ut urna. In vel lectus erat. Etiam feugiat, nunc quis facilisis imperdiet, arcu leo dictum massa, nec lobortis eros nisi in ex. Sed dapibus gravida ornare. Pellentesque tempus ultricies nisl. Fusce auctor dolor vehicula, dignissim enim id, dignissim tortor. Ut congue pharetra leo vel facilisis. Fusce et pulvinar purus. Morbi venenatis nisi vitae convallis placerat. Pellentesque tristique nulla nunc, at pellentesque enim imperdiet sed. Curabitur a justo finibus, ornare nulla id, tempor magna.

                    Nunc ut nibh et quam condimentum vehicula. Duis pulvinar nisl non libero dictum gravida. Mauris viverra sapien a tellus dictum, eu egestas arcu condimentum. Donec viverra elit at nibh egestas congue. Suspendisse congue eu odio vel vulputate. Fusce varius dolor a massa hendrerit faucibus. Suspendisse dictum et dolor sit amet auctor. Vestibulum tempor ornare placerat. Aenean vel ipsum tellus. Quisque consectetur elit sit amet orci fringilla, non posuere orci vehicula. Etiam ultricies nunc ut bibendum tincidunt. Duis vitae tellus varius, faucibus leo non, eleifend risus.
                "
            ],
            [
                "name" => "Section 4",
                "content" => "
                    Nullam aliquet lorem aliquet nibh faucibus congue. Integer varius pellentesque facilisis. Phasellus placerat erat viverra est congue, ut bibendum mi vehicula. Nullam vel scelerisque risus. Phasellus facilisis ipsum id felis dictum, sed congue mauris rutrum. Suspendisse pulvinar felis eget est suscipit hendrerit. Aliquam erat volutpat. Maecenas euismod fermentum mi, vel efficitur risus blandit ac. Praesent justo neque, ultrices eu turpis at, vulputate feugiat odio. Vestibulum commodo vestibulum nibh, ac vehicula turpis sollicitudin et. Donec felis metus, ultrices non eros id, eleifend pharetra enim. Duis pulvinar tristique erat at consequat. Pellentesque eu ante a ante tempor luctus. Sed auctor cursus eros, et mattis ipsum tempus at.

                    Curabitur laoreet tellus a libero faucibus commodo. Vestibulum vitae porta nunc. Vivamus aliquam imperdiet dolor, ac vestibulum dui vestibulum in. Donec eget ex nunc. Ut eu metus eu tortor vulputate pretium. Nunc egestas sit amet orci vel luctus. Curabitur mattis cursus urna vel sodales.
                    
                    Aenean suscipit tincidunt lorem, vitae aliquet dolor venenatis in. Nulla efficitur ante id varius convallis. Sed porta eu sapien tempor sagittis. Aliquam vel justo non velit sodales suscipit. In semper ante et felis blandit, a pharetra magna condimentum. Quisque eget blandit felis. Aenean consectetur est eu mi dapibus, sed consectetur est mollis. Pellentesque in risus a erat vestibulum dapibus eu vel augue. Curabitur vitae porta eros. Fusce vitae dictum quam. Aliquam mollis lacus justo, hendrerit dignissim ligula sollicitudin in. Ut pellentesque, ipsum sit amet lobortis finibus, magna purus elementum magna, vel suscipit lacus nisl id massa.
                    
                    In convallis, justo at euismod hendrerit, lacus libero placerat sapien, quis tempus elit odio vitae metus. Integer quis fringilla massa. Sed nec dui id neque feugiat venenatis sit amet in dolor. Nullam sit amet euismod tellus. Fusce elementum, risus sit amet suscipit sodales, sem justo rutrum tortor, vitae consectetur nibh nulla ut lacus. Aliquam tempor vehicula quam. Aliquam quis odio facilisis, volutpat dui ac, facilisis libero. Aliquam sed dolor vitae lorem mollis volutpat sed id lacus. Nullam consequat, ipsum vitae auctor dapibus, mauris leo finibus diam, eget porta sapien ante eget nisl.
                "
            ],
        ];

        foreach($data as $section) {
            $sec = Section::create($section);
            $sec->versions()->attach(1);
        }
    }
}
