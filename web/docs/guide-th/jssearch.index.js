jssearch.index = {"\u0e04\u0e39\u0e48\u0e21\u0e37\u0e2d\u0e01\u0e32\u0e23\u0e43\u0e0a\u0e49\u0e07\u0e32\u0e19":[{"f":1,"w":1.9}],"service":[{"f":1,"w":7.6}],"&para":[{"f":1,"w":3.42}],"\u0e01\u0e32\u0e23\u0e15\u0e34\u0e14\u0e15\u0e31\u0e49\u0e07":[{"f":1,"w":1.8}],"name":[{"f":1,"w":4}],"\u0e04\u0e39\u0e48\u0e21\u0e37\u0e2d\u0e20\u0e32\u0e29\u0e32\u0e2d\u0e31\u0e07\u0e01\u0e24\u0e29":[{"f":1,"w":1.2}],"\u0e23\u0e32\u0e22\u0e25\u0e30\u0e40\u0e2d\u0e35\u0e22\u0e14":[{"f":1,"w":1.44}],"class":[{"f":1,"w":1.2}],"reference":[{"f":1,"w":1.2}],"guide":[{"f":1,"w":1.2}],"results":[{"f":1,"w":1.2}],"'":[{"f":1,"w":1.44}],"+":[{"f":1,"w":2.48832}],"result":[{"f":1,"w":1.44}],"key":[{"f":1,"w":1.44}],"file":[{"f":1,"w":1.44}],"t":[{"f":1,"w":1.2}],"''":[{"f":1,"w":1.44}],"d":[{"f":1,"w":1.2}]};
jssearch.files = {"1":{"u":".\/\/guide-README.html","t":"\u0e04\u0e39\u0e48\u0e21\u0e37\u0e2d\u0e01\u0e32\u0e23\u0e43\u0e0a\u0e49\u0e07\u0e32\u0e19 Service ","d":"\u0e04\u0e39\u0e48\u0e21\u0e37\u0e2d\u0e20\u0e32\u0e29\u0e32\u0e2d\u0e31\u0e07\u0e01\u0e24\u0e29"}};
jssearch.tokenizeString = function(string) {
		var stopWords = ["a","an","and","are","as","at","be","but","by","for","if","in","into","is","it","no","not","of","on","or","such","that","the","their","then","there","these","they","this","to","was","will","with","yii"];
		return string.split(/[\s\.,;\:\\\/\[\]\(\)\{\}]+/).map(function(val) {
			return val.toLowerCase();
		}).filter(function(val) {
			for (w in stopWords) {
				if (stopWords[w] == val) return false;
			}
			return true;
		}).map(function(word) {
			return {t: word, w: 1};
		});
};