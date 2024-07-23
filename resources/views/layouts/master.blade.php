<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Mon blog Laravel')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
   
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="/contact-us">Contactez nous</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="/about">A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="/contact-us">Contactez nous</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"   href="/articles">articles</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/contact-us">Contactez nous</a></li>
            <li><a class="dropdown-item"href="/about">A propos</a></li>
            <li><a class="dropdown-item" href="/articles">articles</a></li>
            <li><hr class="dropdown-divider"></li>
           
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>



















    <h1>Ici Blog Laravel</h1>
    <p>Boom dans le master</p>
    <nav>
        <ul>
            <li><a href="/contact-us">Contactez nous</a></li>
            <li><a href="/about">A propos</a></li>
            <li><a href="/articles">articles</a></li>
            @yield('contenu')
        </ul>
    </nav>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta reprehenderit aliquid dicta, voluptas, officiis corporis, hic nostrum corrupti molestias mollitia temporibus quos? Facere esse, dolor repellat voluptatum fugiat soluta, atque quaerat, delectus quidem aspernatur maxime iure est. Eaque unde similique quidem a eligendi minima et cum eum? Alias, earum? Impedit molestias, illo amet nulla nisi cum id perferendis repudiandae in cumque nostrum reiciendis aliquam, nihil soluta necessitatibus ipsum vel sit. Ad, nisi a. Dolore dolorem similique tempore facere provident quo ea itaque sequi voluptatum magnam totam, voluptatem repellat quibusdam quidem sapiente inventore fugit ut suscipit, cum quis natus ratione eaque labore. Sit sint animi vel aut atque vero laudantium voluptates facilis minus cum et repudiandae praesentium voluptas, odit nam. Eius nemo fuga culpa aperiam alias minus totam, necessitatibus soluta id explicabo ipsam, quibusdam esse autem corrupti? Similique, porro corrupti ut esse placeat consectetur veritatis ad voluptate rem delectus voluptatum nihil saepe debitis iste expedita blanditiis reiciendis eum nam laudantium ex quibusdam quisquam illum ipsa ducimus! Est laudantium ullam hic quia magni ratione deleniti earum modi natus et adipisci quaerat libero assumenda vero architecto dolore, delectus quisquam nemo aliquid consequuntur quas veritatis. Minima commodi atque pariatur fuga optio, excepturi, sit veniam corrupti porro nemo asperiores possimus, ipsam eos suscipit odio odit nobis quibusdam vero ipsa quidem maxime eaque voluptatibus praesentium iure! Est necessitatibus dolorum ad iusto maiores quos quas. Autem tempore sed, aspernatur facere ratione cupiditate at quas voluptates assumenda? Perferendis assumenda repellendus quo ad dolorem voluptatem, praesentium, inventore possimus facere pariatur, sunt omnis. Modi sequi reiciendis temporibus molestiae voluptatum consequuntur delectus itaque nihil est eos rerum quibusdam soluta, sint illo alias corporis quia, explicabo ab, laborum sapiente culpa quaerat repudiandae harum. Tempora, nostrum repellat aliquam temporibus a porro quaerat dolorem, vero illum vitae saepe! Inventore unde est, voluptates eos ducimus, dicta vero quasi voluptatem doloribus consequatur odit cupiditate consectetur cum, asperiores corporis dolore id adipisci aliquam? In repudiandae illum fugit eaque illo possimus cumque sint quo. Soluta ab dicta beatae, delectus in sint velit, sed optio obcaecati suscipit porro atque ea laborum nisi rem? Expedita fuga adipisci unde atque eveniet repellat, ab dolor asperiores facere temporibus officiis cum, doloribus laborum quos praesentium sunt reprehenderit at, quam aperiam repellendus vitae dolorem eum cupiditate. Sunt earum sed perferendis, eius architecto suscipit, omnis harum reiciendis voluptate aperiam magni veniam laborum nam, natus quaerat quae excepturi! Sunt, nam! Minima obcaecati quod deserunt inventore non eius omnis nisi expedita nostrum, quidem tempora velit voluptatem illo qui perspiciatis assumenda exercitationem blanditiis optio dolorum aspernatur ea voluptatum. Expedita nobis unde dignissimos error non ex iure, placeat atque deleniti eaque quidem asperiores nesciunt illo dolorum voluptate obcaecati odio delectus sit necessitatibus illum maxime omnis. Ratione non cupiditate, voluptatibus accusamus eos molestias corrupti inventore voluptate, et at fugiat harum quidem. Et voluptates quod minus itaque dolores quaerat ipsam modi quisquam libero, quis reprehenderit, voluptatibus error nam dolorem dignissimos, commodi aliquam eos! Ab et nisi omnis possimus accusamus aliquam rerum recusandae dicta cum totam tempore eum autem ipsam, placeat quae.</p>
<h3>Suite</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem sunt atque illo et delectus dolore nesciunt eaque fugiat, maxime eum odio rem doloremque eos molestiae mollitia tempora inventore at deleniti quibusdam suscipit cumque unde exercitationem soluta. Assumenda accusantium molestiae nam eius voluptas placeat! Asperiores, nulla animi! Modi eius vitae fugiat consequuntur dicta ut illo architecto ducimus ipsum soluta, natus quam reprehenderit nihil, eos autem. Facere laudantium dignissimos illo sapiente maiores ratione ipsa laboriosam libero odit deserunt earum repudiandae debitis ut ipsum commodi molestias ullam, eius eveniet cumque quas natus aut id hic voluptatibus. Eveniet ut a commodi cupiditate adipisci veritatis odio illo inventore, officiis enim, eaque possimus, nemo harum amet voluptatibus unde doloremque animi. Repellendus nihil temporibus esse? Et perferendis, mollitia fuga sit quasi, ex unde dolorum commodi id vitae accusamus fugiat dicta voluptates dolor! Consequuntur porro nobis molestiae itaque, ab officia! Similique quis ipsum voluptates impedit blanditiis error quisquam illum, nostrum sequi tempore explicabo! Sit soluta consectetur excepturi, aliquam ipsam ab perspiciatis aspernatur, nam suscipit, itaque labore quo! Possimus perferendis exercitationem veritatis consequuntur ipsam ea, dolorem quaerat, reprehenderit laudantium suscipit illo quia obcaecati minima. Aperiam, animi molestias explicabo laboriosam necessitatibus soluta, cupiditate ab sed consequatur earum, harum molestiae quasi. At atque iure dicta rem obcaecati voluptatem suscipit! Iure dolores culpa commodi officiis nulla excepturi quasi, delectus eos ratione ducimus ipsam suscipit dolor nihil porro maiores consectetur quod cum a! Possimus obcaecati reprehenderit doloremque consectetur autem reiciendis sint, perspiciatis nemo similique enim in, voluptates temporibus nisi explicabo. Blanditiis illo numquam, ratione libero accusantium quos doloribus provident aliquid assumenda dolores veniam debitis itaque adipisci consequuntur ex tempore quam inventore aliquam autem quisquam, soluta consequatur vitae? Culpa amet laboriosam at maiores ut, fuga atque est provident dicta ad explicabo asperiores consectetur itaque nostrum a voluptas quod commodi quo molestiae. Quod eligendi reiciendis, numquam sed unde, voluptatum aut quas consequatur dicta beatae ut distinctio aperiam optio odio nostrum ratione iure porro harum aspernatur quam. Explicabo, ab ex. Atque natus error aperiam adipisci numquam aliquam laborum commodi dolor, veniam architecto repudiandae pariatur, minima unde assumenda est nemo voluptatem molestiae. Neque itaque voluptatum veritatis quia dolor quasi sint perspiciatis ducimus eligendi expedita. Reiciendis culpa ipsa odio alias est maiores maxime deserunt eos repellat ipsum excepturi dolorum, fugit voluptas a possimus voluptatum, et recusandae, mollitia eius esse provident. Modi exercitationem in alias numquam deserunt nemo quisquam voluptates voluptatem! Ratione voluptate odio qui pariatur voluptatibus aliquam ad commodi veniam dignissimos aut ullam aperiam, consequatur maiores blanditiis! Fuga debitis animi, temporibus sapiente reiciendis rerum, incidunt fugit ipsa perspiciatis autem quas minus? Maiores, sint velit tempora inventore saepe at in culpa. Quae atque vitae libero accusamus, velit eius expedita optio saepe dicta in, beatae alias dolores? Eveniet maiores quia aliquam vel facere? At consequatur sequi quasi aliquam. Saepe nostrum, placeat voluptates tempora inventore omnis ipsum voluptas vero alias iste numquam, rem officia et sunt in. Sapiente, placeat distinctio. Quo, excepturi nihil delectus numquam, exercitationem pariatur a optio magnam, neque labore quidem ex. Fugit voluptate quos aperiam ut perferendis quas.</p>
<main ><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></main>
</body>

</html>