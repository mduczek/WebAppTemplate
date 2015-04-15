
CONF = {
  DB: if location.host.startsWith('localhost')
        'http://localhost:9200'
      else
        'SOMETHING'
}

# Check connection to DB
$.ajax({
  url: CONF.DB,
  type:'GET',
  success: (data) -> console.log(data)
})

es_put = (index_name, type_name, data) ->
  $.ajax({
    url: "#{CONF.DB}/#{index_name}/#{type_name}/",
    type: 'POST',
    data: JSON.stringify(data),
    success: (data) -> console.log(data)
    error: (error) -> console.log(error.responseText)
  })

es_get_all = (index_name, type_name, callback) ->
  $.ajax({
    url: "#{CONF.DB}/#{index_name}/#{type_name}/_search",
    type: 'GET',
    success: (data) -> callback(data)
  })

#es_get_all('twitter', 'tweet', (d) -> console.log(d))

