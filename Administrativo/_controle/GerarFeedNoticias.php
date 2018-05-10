<?php
    include_once("FeedNoticias.php");
    // Permitir requisições a urls externas
    ini_set('allow_url_fopen', 1);
    ini_set('allow_url_include', 1);
    // Caminho do feed
    $feed = 'https://news.google.com/news/rss/headlines/section/q/Copa%20do%20mundo%202018/Copa%20do%20mundo%202018?ned=pt-BR_br&hl=pt-BR&gl=BR';
    // leitura do feed
    $rss = simplexml_load_file($feed);
    //limite de itens
    $limit = 18;
    // contador
    $count = 0;
    $cod = 1;
    // Lista de Feed
    $ListaDeNoticias = array();
    // imprime os itens do feed
    if ($rss) {
        foreach ($rss->channel->item as $item) {
            $Corpo['content'] = trim((string) $item->description);

            $image = preg_match('/(<img[^>]+\>)/i', $Corpo['content'], $results);

            if ($image == 1 || $image == true) {
              $replace_img = preg_replace('/(<img[^>]+\>)/i', '', $Corpo['content']);
              $Corpo['n_image'] = $results[0];  
              //$Corpo['n_image'] = str_replace('border="1"', 'border="1" style="max-width:360px;max-height:240px;object-fit:cover;"', $Corpo['n_image']);                 
            }else{
              $Corpo['n_image'] = '<img src="img/noticias/logofeed.jpg">';
            }

            // Criando classe do Feed de Notícias
            $ListaDeNoticias[$count] = new FeedNoticias($cod, $item->title, $item->link, $Corpo['n_image']);
            $cod++;

            // incrementamos a variável $count
            $count++;

            // caso nosso contador seja igual ao limite paramos a iteração
            if($count == $limit) break;
        }
    }   
?> 