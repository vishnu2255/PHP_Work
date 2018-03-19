var hobbies = {
  "John": ['Piano', 'Puzzles', 'Yoga'],
  "Adam": ['Drama', 'Fashion', 'Pets'],
  "Mary": ['Magic', 'Pets', 'Reading']
};

foreach(var item in hobbies)
{
ret : [];
var i: 0 ;
	foreach(hb in item)
	{
		if(hb === 'Yoga')
		{
			
			ret[i] = item;
			i++;

		}

	}

}