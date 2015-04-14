$.ajax({
  url:"http://localhost:9200",
  type:'GET',
  success: (data) -> console.log(data)
})

es_put = (index_name, type_name, data) ->
  $.ajax({
    url: "http://localhost:9200/#{index_name}/#{type_name}/",
    type: 'POST',
    data: JSON.stringify(data),
    success: (data) -> console.log(data)
    error: (error) -> console.log(error.responseText)
  })

es_get_all = (index_name, type_name, callback) ->
  $.ajax({
    url: "http://localhost:9200/#{index_name}/#{type_name}/_search",
    type: 'GET',
    success: (data) -> callback(data)
  })

client = new $.es.Client({
  hosts: 'localhost:9200'
})

client.ping({
  requestTimeout: 30000,
  # undocumented params are appended to the query string
  hello: "elasticsearch!"
  }, (error) ->
  if (error)
    console.error('elasticsearch cluster is down!')
  else
    console.log('All is well')
)

client.search({
  index: 'twitter',
  type: 'tweet',
  body: {
    query: {
      term: {'message':'elasticsearch'}
    }
  }
}).then(
  (resp) ->
    console.log(resp)
  ,
  (err) ->
    console.trace(err.message)
)

es_get_all('twitter', 'tweet', (d) -> console.log(d))