<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DOM Based XSS</title>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script>
		jQuery(function(){
			function scrollTo(title) {
				$('html, body').animate({
					scrollTop: $('h2[data-title="' + title + '"]').offset().top
				}, 500);
			}
			$(window).bind( 'hashchange', function(e) {
				scrollTo(window.location.hash.substr(1));
			});

			window.location.hash && scrollTo(window.location.hash.substr(1));

		});
	</script>

</head>
<body>
	<div class="container"><div class="row">
		<div class="col-md-2">
			<ul class="nav nav-sidebar">
				<li><a href="#asparagus">Asparagus</a></li>
				<li><a href="#beans">Beans</a></li>
				<li><a href="#beet">Beet</a></li>
				<li><a href="#cabbage">Cabbage</a></li>
				<li><a href="#cauliflower">Cauliflower</a></li>
				<li><a href="#carrot">Carrot</a></li>
				<li><a href="#celery">Celery</a></li>
				<li><a href="#cucumber">Cucumber</a></li>
				<li><a href="#corn">Corn</a></li>
				<li><a href="#endive">Endive</a></li>
				<li><a href="#lettuce">Lettuce</a></li>
				<li><a href="#melons">Melons</a></li>
				<li><a href="#onion">Onion</a></li>
				<li><a href="#parsley">Parsley</a></li>
				<li><a href="#parsnip">Parsnip</a></li>
				<li><a href="#pea">Pea</a></li>
				<li><a href="#potato">Potato</a></li>
			</ul>
		</div>
		<div class="col-md-10">

			<h1>Standard Varieties Of Vegetables</h1>

			<p>
				The amateur gardener will find it extremely perplexing work to
				make a satisfactory selection of _varieties_ of vegetables to
				grow in his garden. He knows quite well, as a general thing, what
				_kinds_ he wants to grow, but when he comes to a consultation of
				the seedsmen's catalogues he discovers that of each _kind_ of
				vegetable listed therein there are so many _varieties_ mentioned
				that he is bewildered. Most of them are described as being so
				desirable that he cannot help getting the impression that if he
				rules out this or that one he is likely to deprive himself of
				the very thing from which he would obtain the highest degree of
				satisfaction. Nine times out of ten he finds, after going through
				the catalogues and marking the kinds and varieties that appeal to
				him most forcibly, that he has a list which would furnish enough
				seed to supply an average-sized market-garden.
			</p>
			<p>
				I would advise the amateur gardener to attempt the culture of only
				a few of the many varieties described in the catalogues, and these
				of the very best. But what constitutes "the very best" is a hard
				matter for him to decide where all are described by adjectives in
				the superlative degree. He will find, by comparing the catalogues
				of the various seed firms, that there are described in most
				of them certain varieties of each kind of vegetable that seem
				common to all, along with many other varieties whose names differ
				greatly, though the descriptions of them indicate that there is
				not much difference in quality, or in other general respects. If
				he confines his selection to such varieties of each kind as the
				various dealers list _under the same names_ in their catalogues he
				will be making no mistake, for the fact that all leading dealers
				carry these varieties in stock is sufficient proof that they are
				standard varieties, and of such superior merit that no up-to-date
				dealer can afford to exclude them from his list.
			</p>
			<p>
				Take, for instance, Stowell's Evergreen sweet-corn, and Champion
				of England pea. _All_ dealers handle these, because they _are_
				standard, and always in demand because their superior qualities
				have made them universal favorites wherever grown. But they
				have other varieties of the same vegetable of which each makes a
				specialty, under names which will be found in no catalogue but
				their own. Many of these are doubtless possessors of all the good
				qualities claimed for them, but this we cannot be sure about. But
				the sorts which are common to all are those of whose merit there
				can be no two opinions. These are the varieties the inexperienced
				gardener can select with the assurance that he is getting the best
				thing of its kind on the market.
			</p>
			<p>
				In this chapter I propose to make mention of only such kinds of
				vegetables as I have grown in my own garden. I do this because
				so many beginners in gardening prefer to depend on the advice
				of some one who has familiarized himself with the merits of the
				various vegetables adapted to ordinary gardening. And I propose
				to give with each such brief cultural directions as seem of most
				importance, thus making it possible for the amateur to avoid some
				of the mistakes that might be made if he were wholly ignorant
				of the requirements of his plants. After having experimented
				with many kinds I have pinned my faith to the kinds I shall make
				mention of, and I have no hesitancy in recommending them to the
				attention of all gardeners, feeling confident that a trial of them
				will bear me out in the statement that no better list can be made.
				There _may_ be others of equal or superior merit, but if there are
				I have still to find out what they are.
			</p>

			<h2 data-title="asparagus">Asparagus</h2>
			<p>
				Taking the list alphabetically, the first vegetable to consider is
				asparagus. Conover's Colossal seems to combine all the merits of
				the several varieties on the market in such a degree as to give it
				a place at the head of the list of desirable kinds for ordinary
				garden culture. It is tender, fine-flavored, and very productive.
				A dozen plants, after becoming well established, will furnish all
				that will be required by a family of four or five persons.
			</p>
			<p>
				In order to secure good crops of this delicious vegetable it will
				be necessary to dig up the soil in which it is to be planted
				to the depth of two or three feet, and fill the bottom of the
				excavation with strong manure. Pack this down firmly, and then
				return to the trench the soil thrown out from it, fertilizing this
				well as you do so. While asparagus will grow in a soil that is
				not at all rich, and will live on indefinitely under all kinds
				of neglect and abuse, it must be given plenty of strong food and
				good care in order to enable it to do itself justice. I would
				not advise attempting to grow it from seed, as it takes a long
				time for seedling plants to reach maturity. I would get two- or
				three-year-old plants. Set them about eighteen inches apart and
				at least four inches below the surface. Keep weeds and grass away
				from them. Give the asparagus-bed a place in the garden by itself,
				preferably along a fence or in some location where it will not
				interfere with other plants which call for the frequent use of
				the garden-cultivator. On no account plant it in that part of the
				garden where it will be necessary to use a plow, for it is a plant
				that must be left undisturbed if you would have it do its best.
				Cover the beds with coarse manure in the fall, and work this into
				the soil about the plants in spring.
			</p>

			<h2 data-title="beans">Beans</h2>
			<p>
				Mammoth Stringless Green Pod matures early, and is very tender,
				fine-flavored, and productive. It is a general favorite for the
				home garden.
			</p>
			<p>
				Golden Wax is later than the green-podded variety mentioned
				above. It is valuable as a string-bean, and for shelling.
			</p>
			<p>
				Beans are quite tender, therefore they should not be planted until
				the weather becomes warm and settled. Plant in rows two feet
				apart, and about four inches apart in the row, or in hills of
				three or four plants each. Cultivate frequently during the early
				part of summer, throwing the soil toward the plants. Do not work
				among them while they are wet from dew or rain.
			</p>
			<p>
				If a pole-bean is wanted, Improved Lima will be found extremely
				satisfactory because of its productiveness and its fine, buttery
				flavor. This class supplies the table with shelled beans only, its
				pods being too tough to use as a string-bean. Plant in hills of
				six or eight, setting a pole six or seven feet tall in the center
				of each hill for the plants to climb by.
			</p>

			<h2 data-title="beet">Beet</h2>
			<p>
				I would advise two varieties of this vegetable where the garden
				is large enough to warrant the use of more than one. Crosby's
				Egyptian stands at the head of the list as an early variety. It is
				remarkably tender, and has a sugary flavor that is most delicious.
				As a second variety I would advise Crimson Globe. This is very
				sweet and fine-flavored, and comes to perfection during the latter
				part of summer. It is a good keeper, and a quantity of it should
				be stored in the cellar for winter use.
			</p>
			<p>
				Sow seeds in rows sixteen to eighteen inches apart. Sow thickly,
				and use the surplus plants as greens while young and tender,
				making use of both top and root. Thin to three or four inches
				apart.
			</p>

			<h2 data-title="cabbage">Cabbage</h2>
			<p>
				Unless the garden is of considerable size I would not advise
				planting this vegetable, because it takes up so much room that
				might better be given to other kinds which the housewife will find
				more useful. The plants should stand at least two feet apart. Seed
				can be put into the ground about the first of May, or plants can
				be started in the hotbed if wanted for very early use. Seedlings
				can be transplanted as soon as they have made their second leaf.
			</p>
			<p>
				For a very early variety I would advise Jersey Wakefield. For late
				use Late Drumhead or Stone Mason Marblehead--both excellent in all
				respects, and fine for winter use.
			</p>
			<p>
				Care must be taken to prevent insects from injuring the plants
				during the various stages of their development. Spray with
				an infusion of the tobacco extract known as Nicoticide. This
				will effectually prevent the pests from doing harm if applied
				thoroughly and frequently.
			</p>
			<p>
				If cabbage is to be wintered in the cellar, it must be kept
				cool and dry. Some prefer to bury the heads in trenches, in dry
				locations in the garden. The trench should be about two feet deep.
				Spread straw in the bottom of it, and place the cabbage on it,
				head down, with the large leaves folded well together. Then cover
				with three or four inches of hay, and bank up with soil. Put a
				board over this to shed rain. The cabbage will freeze, but if left
				in the ground until the frost is gradually extracted from it it
				will be found crisp and brittle, and much more satisfactory for
				table use than that which is wintered in the cellar. Care must be
				taken to exclude rain. If water gets to it it will be ruined. It
				is a good plan to cover the trench with oilcloth or tarred paper,
				both being waterproof.
			</p>

			<h2 data-title="cauliflower">Cauliflower</h2>
			<p>
				This is a favorite vegetable when well grown and properly cared
				for. It requires a rich soil, a location well exposed to the
				sun, and frequent applications of water if the season happens to
				be a dry one. Cultivate as you would cabbage. For early use the
				plants should be started in the hotbed, and transplanted to the
				cold-frame as soon as they have made their third leaves. Put into
				the open ground as soon as the soil is in good working condition.
				Set the plants about two feet apart. When heads have formed they
				should be bleached by drawing the large leaves together and tying
				them with strips of soft cloth.
			</p>
			<p>
				For a late crop, to mature during the pickling season, start
				plants in open ground in May.
			</p>
			<p>
				The best early variety is Dwarf Erfurt. Autumn Giant is an
				excellent late variety.
			</p>

			<h2 data-title="carrot">Carrot</h2>
			<p>
				This plant likes a deep, warm, sandy soil. Early Short Horn
				matures by midsummer. It is rich and sweet in flavor. Red
				Intermediate is a later variety, excellent for fall and winter
				use. Comparatively few persons give this plant a place in their
				gardens, but it richly deserves a place there because of its value
				as an article of food, as well as because of its health-giving
				qualities. It adds greatly to the variety of the bill of fare, and
				where it appears frequently on the table a liking for it is soon
				developed, and thereafter it becomes a standard vegetable in the
				housewife's list of "must-haves." It adds a delightful flavor to
				vegetable soups.
			</p>

			<h2 data-title="celery">Celery</h2>
			<p>
				The seed of early celery should be sown in the hotbed. Transplant
				the seedlings to the cold-frame and allow them to remain there
				until May. Then set in the richest soil at your disposal, six
				inches apart in the row. Blanch by setting up boards a foot or
				more in width each side the row, allowing an opening about three
				inches wide at the top through which the plants can get a little
				light. For late and winter use, sow the seeds in open ground in
				May. Bleach by earthing up gradually, as the stalks develop,
				until you have the plants buried to within a few inches of the
				tip of their leaves. Use clean, dry soil in banking the plants.
				Sawdust is good, but care must be taken to make use of a kind that
				does not have a strong odor. Pine-dust will give the plants a
				disagreeable flavor.
			</p>
			<p>
				For winter use, take up plants, root and all, and pack close
				together in boxes and store in a cool, dark cellar.
			</p>
			<p>
				White Plume is the best early variety. Giant Pascal is probably
				the most satisfactory winter variety, but Winter Queen is a
				favorite with many. Both are so tender and have such a rich, nutty
				flavor that it is not an easy matter to decide between them.
			</p>

			<h2 data-title="cucumber">Cucumber</h2>
			<p>
				For very early cucumbers plant the seed in the hotbed in March
				or April, but do not put the plants into the garden until all
				danger of frost is over. This plant requires a rich and mellow
				soil. It should be set in hills at least four feet apart. It is
				a good plan to start the seed in pieces of sod placed grass-side
				down. This enables one to move them from the hotbed without any
				disturbance of their roots. The cucumber- or squash-beetle often
				destroys the plants when they are put in the open ground if close
				watch is not taken and prompt effort made to rout the enemy. Spray
				with Nicoticide infusion, taking pains to have it reach the under
				side of the leaves. Dry road-dust sifted thickly over the plants
				is often found quite effective, but because of the inability to
				apply it to the under side of the leaves the liquid insecticide
				will be found more effective.
			</p>
			<p>
				Improved Early White Spine is a favorite with all who like a
				crisp, tender-meated, finely flavored cucumber. Ever-bearing is an
				excellent sort for pickling as well as for use on the table during
				the fall, as it continues to bear until frost kills the vines.
			</p>

			<h2 data-title="corn">Corn</h2>
			<p>
				Sweet-corn is one of the most delicious of all garden vegetables,
				and every garden that is large enough to admit of its culture
				should give place to two or three varieties of it. Because of
				its tall growth and the distance required between rows it is
				not adapted to culture in the very small garden, though I would
				willingly go without some of the other vegetables generally grown
				there in order to give place to a few hills of it.
			</p>
			<p>
				Golden Bantam produces ears only four or five inches in length,
				but what they lack in size they make up for in tenderness and
				sweetness.
			</p>
			<p>
				Country Gentleman is a medium variety, very tender, sweet, and
				juicy.
			</p>
			<p>
				But the ideal sweet-corn is Stowell's Evergreen. No other variety
				equals it in tenderness, sugary sweetness, and rich flavor. It
				does not come to maturity until quite late in the season, but it
				remains in excellent eating-condition until the plant is killed by
				frost.
			</p>
			<p>
				Do not plant until the weather and the ground are warm--generally
				about May 10th at the extreme North. Sweet-corn seed often decays
				if put into the ground as early as field-corn. Have the soil
				rich and mellow, and cultivate frequently and thoroughly. If a
				dry spell comes along make use of the cultivator daily until the
				drought is broken.
			</p>

			<h2 data-title="endive">Endive</h2>
			<p>
				This plant ought to be grown far more extensively than it is
				because it is one of the best salad plants we have for fall and
				winter use. Some should be sown in April for use during the
				summer, and some in July, for late use. When the plants are two or
				three inches high transplant to rich soil, setting them about ten
				inches apart. When nearly full-grown, gather the leaves together
				and tie them with strips of cloth, thus excluding the light from
				the central part of the bunch. It must be blanched before it is
				fit for table use. This part of the work must be done while the
				plants are perfectly dry. If done when they are wet or even moist,
				they will be quite sure to rot.
			</p>

			<h2 data-title="lettuce">Lettuce</h2>
			<p>
				This plant should be started in the hotbed if there is one. The
				seedlings should be transferred to the cold-frame before they have
				attained much size, and left there until the ground becomes warm.
				Very fine lettuce, however, can be grown from seed sown directly
				in the open ground about the first of May, if the soil is warm
				and rich. A fertile soil is quite important, as it is necessary
				to bring on a rapid growth in order to have the plant crisp and
				tender. Slow development gives a comparatively worthless article.
			</p>
			<p>
				The All Heart variety is excellent for spring and early summer
				use. It forms a solid head, and is very crisp and tender, with
				that rich, buttery flavor that the lover of this plant insists on.
				Mammoth Salamander is one of the best late-season kinds.
			</p>

			<h2 data-title="melons">Melons</h2>
			<p>
				These, like corn and cabbage, are not adapted to culture in
				the small garden because they require more room than it is
				possible to give them without giving up other vegetables which
				the housewife cannot well afford to go without. But in good-sized
				gardens I would advise their culture, because there is nothing
				else quite equal to them in delicacy of flavor and luscious
				sweetness. They require a light, rich soil. Plant when the ground
				is warm, and not before, in hills four feet apart. It is a good
				plan to put a generous quantity of manure from the henhouse in
				each hill, working it well into the soil before seed is planted.
				Put at least a dozen seed in each hill, for some of the seedlings
				will doubtless be destroyed by the beetle that works on cucumber-
				and squash-vines. Spray all over with Nicoticide infusion as soon
				as the first beetle is seen, also shower with dry road-dust. If a
				fungous disease attacks them spray with Bordeaux mixture.
			</p>
			<p>
				Rocky Ford is the standard variety of muskmelon at present. It has
				a thick greenish-yellow flesh, is smooth-grained, is very sweet,
				has a most delicious flavor, and is so tender that it fairly seems
				to melt in the mouth. Netted Gem is another standard variety.
			</p>
			<p>
				Among the watermelons Ice-Cream is a general favorite. Mammoth
				Ironclad grows to a very large size, is solid-meated, and has a
				peculiarly sweet and luscious flavor.
			</p>

			<h2 data-title="onion">Onion</h2>
			<p>
				This should be sown in light, sandy soil, if possible, as it
				seldom does well in a heavy soil.
			</p>
			<p>
				Yellow Danvers is the leading variety for the home garden.
				Silverskin has a mild flavor, and on that account it is a favorite
				with many. It is fine for pickling. It also keeps well in winter.
			</p>

			<h2 data-title="parsley">Parsley</h2>
			<p>
				Sow this plant thickly, in April, in rows of mellow soil. As the
				seed germinates very slowly, it is well to soak it in warm water
				before sowing. If you have a light cellar, plants can be potted
				in fall and stored there for winter use. The cellar window is a
				good place for them. Every housewife who prides herself on the
				attractive appearance of her roasts and other meat dishes and many
				kinds of salad will not be willing to be without this plant. Dwarf
				Perpetual is the standard variety for the home garden. Its leaves
				are charmingly crimped and curly, and of beautiful dark green
				that makes them very ornamental when used as a garnish for the
				table.
			</p>

			<h2 data-title="parsnip">Parsnip</h2>
			<p>
				This vegetable is not grown as much as it ought to be. One
				does not care for it until winter sets in. Then it affords a
				much-appreciated change from other vegetables. It is an excellent
				keeper when stored in the cellar in winter. Or the roots can
				be left in the ground until spring, when they will be found
				delightfully fresh and tender. Sow in April or May, in deep, rich
				soil. Hollow Crown is the standard variety.
			</p>

			<h2 data-title="pea">Pea</h2>
			<p>
				This vegetable is so extremely hardy that it can be planted with
				entire safety quite early in spring. There are varieties that come
				into bearing a few weeks after sowing, followed by medium early
				kinds, which give place, a little later, to such varieties as
				Champion of England and Telephone. Champion of England is the most
				delicious of all peas.
			</p>
			<p>
				Unless the garden is a very small one, one should plan for a
				succession. If this is done it will be possible to enjoy this
				vegetable during the greater part of the season, with possibly
				the exception of the very hottest part of summer. Best results are
				secured by planting the seed two or three inches deep in furrows.
				The soil should be rich. If there is a little clay in it, all the
				better.
			</p>
			<p>
				Low-growing varieties require no support, but the tall kinds must
				be bushed or trained on coarse-meshed wire netting. Bushes suit
				this plant better than anything else. If the vines are allowed
				to crinkle down and come in contact with the ground their pods
				will almost always decay, and the vines will mildew and become so
				diseased that an end will be put to their bearing.
			</p>
			<p>
				American Wonder is one of the best very early kinds. Gradus is
				next in order. Advancer I consider the best medium variety.
				Telephone is a most excellent late variety, second only to
				Champion of England, which is everywhere conceded to be the ideal
				pea so far as productiveness, size, rich flavor, and sweetness are
				concerned.
			</p>

			<h2 data-title="potato">Potato</h2>
			<p>
				Anybody can grow the potato, _after a fashion_. But in order to
				grow it _well_ it must receive more attention than is generally
				given it. It must have a rich and mellow soil--a sandy one is
				preferable--and the best of cultivation.
			</p>
			<p>
				This is one of the vegetables that require considerable room,
				therefore it is not adapted to small-garden culture. But when
				space will admit of it it should always be grown, because it is
				one of the garden products that can be used in so many ways that
				the housewife finds it one of the things she cannot well get along
				without.
			</p>
			<p>
				Seed is obtained by cutting old potatoes in pieces, each piece
				having an "eye" or growing-point. The pieces should be planted in
				hills, four or five pieces to a hill, with hills two feet apart.
				Cover to a depth of four inches.
			</p>
			<p>
				If plants are not watched while small, insects are likely to
				attack them. Spray with Nicoticide infusion. Later in the
				season the Colorado beetle will be quite likely to put in its
				appearance. Then use Paris green, either in infusion, or mixed
				with land-plaster, and applied in a dry state while the plants
				are moist from dew. If any fungous disease is discovered, spray
				with Bordeaux mixture. All these insecticides can be procured
				from druggists or dealers in agricultural goods, or they can be
				obtained from the dealer from whom you buy seed.
			</p>
			<p>
				It is well to plant this vegetable for a succession. One of the
				best early varieties is Beauty of Hebron, which matures in eight
				to ten weeks from planting. Early Rose is everywhere a favorite,
				as is Early Ohio. Rural New-Yorker is a standard late variety.
				Burbank's Seedling is excellent as an intermediate sort. All the
				varieties named are of superior flavor, very productive, and sure
				to give complete satisfaction.
			</p>

			<h2 data-title="radish">Radish</h2>
			<p>
				This most toothsome vegetable should be sown early, either in the
				hotbed or the open ground. If you have a light, warm soil and a
				location that is fully exposed to the sun you can raise almost as
				fine radishes outside of the hotbed as in it, though of course
				not as early in the season. A crop will develop in five or six
				weeks from sowing. Plant at intervals of two or three weeks for a
				succession. Cardinal Globe is the standard early variety. Crimson
				Giant is a little later. Both have that crisp, tender, and juicy
				quality which makes the radish so universal a favorite. Icicle is
				a long-growing white variety, very crisp and brittle. This has the
				merit of remaining in condition for use longer than any other
				variety.
			</p>

			<h2 data-title="rhubarb">Rhubarb</h2>
			<p>
				This plant likes a deep, rich, and rather moist soil. It should
				be planted in permanent beds, about three feet apart. I would not
				advise attempting to grow it from seed. Get roots one or two years
				old. Victoria is a standard variety.
			</p>

			<h2 data-title="salsify">Salsify</h2>
			<p>
				A vegetable that ought to be grown a great deal more than it is.
				Its popular name of "vegetable oyster" is not a misnomer, for
				it has a distinct oyster flavor. Many persons prefer it to the
				bivalve, when it is cooked properly. Being hardy, it can be left
				in the ground over winter, or it can be dug and stored in the
				cellar along with parsnips and carrots for use in winter. Sow
				early.
			</p>

			<h2 data-title="squash">Squash</h2>
			<p>
				Probably the best variety of summer squash for home use is Giant
				Crook Neck. For winter use the Hubbard stands at the head of the
				list. These favorite vegetables require a rich soil. They should
				be planted in hills about three feet apart. Have the soil rich.
				Keep watch of them, for they are liable to attacks from beetles.
				It is well to sprinkle a handful of tobacco-dust about the young
				plants. As they become larger they can be sprayed with the
				Nicoticide infusion heretofore spoken of.
			</p>

			<h2 data-title="spinach">Spinach</h2>
			<p>
				Desirable for "greens." Sow as early in the spring as the ground
				is in good working condition. Have the soil quite rich to force a
				tender, succulent growth. Sow for succession, a month apart. The
				Long-Season variety is the best I have any knowledge of.
			</p>

			<h2 data-title="tomato">Tomato</h2>
			<p>
				Start this plant in the hotbed if you have one. If not, sow in the
				open ground as soon as it has become warm. To secure a very early
				crop the plants must be started as early as March. When three or
				four inches high transplant from hotbed to cold-frame, but do not
				put into the open ground until all danger from frost is over.
				If you are without hotbed facilities I would advise purchasing
				plants from the gardener, who tries to supply his customers with
				strong and healthy plants very early in the season. Plants from
				seed sown in the open ground will be so late in ripening a crop,
				as a general thing, that they will not afford satisfaction.
				Standard varieties are Stone, very solid and firm-fleshed and of
				fine quality, and Ponderosa, very large, fine-flavored, and almost
				seedless.
			</p>

			<h2 data-title="license">License</h2>
			<div class="text-muted">
				<p>
					Produced by Giovanni Fini, Carolyn Jablonski and the Online
					Distributed Proofreading Team at http://www.pgdp.net (This
					file was produced from images generously made available
					by The Internet Archive)
				</p>
				<p>
					Updated editions will replace the previous one--the old editions
					will be renamed.
				</p>
				<p>
					Creating the works from public domain print editions means that no
					one owns a United States copyright in these works, so the Foundation
					(and you!) can copy and distribute it in the United States without
					permission and without paying copyright royalties.  Special rules,
					set forth in the General Terms of Use part of this license, apply to
					copying and distributing Project Gutenberg-tm electronic works to
					protect the PROJECT GUTENBERG-tm concept and trademark.  Project
					Gutenberg is a registered trademark, and may not be used if you
					charge for the eBooks, unless you receive specific permission.  If you
					do not charge anything for copies of this eBook, complying with the
					rules is very easy.  You may use this eBook for nearly any purpose
					such as creation of derivative works, reports, performances and
					research.  They may be modified and printed and given away--you may do
					practically ANYTHING with public domain eBooks.  Redistribution is
					subject to the trademark license, especially commercial
					redistribution.
				</p>
			</div>
		</div>
	</div></div>


</body>
</html>