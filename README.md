GraphQL Demo Car API
====================


This project was created to show how we use [GraphQLBundle](https://github.com/Youshido/GraphQLBundle) in a simple car api.

The project is based on the fork of [GraphQL Demo](https://github.com/Youshido/GraphQLDemoApp).


## How to run
To run backend you need clone this repo and:

* If you have docker installed, just type this in project root:

  > docker-compose up -d

  This command will run containers and exposed port will be `8500`.

  API endpoint: `http://localhost:8500/graphql`

## Sending requests
Now you can easily send request to endpoint, for example:
>$ curl -XPOST 'http://127.0.0.1:8500/graphql'

Response:
```graphql
{
    "errors": [
        {
            "message": "Must provide an operation."
        }
    ]
}

```

Now let's specify query in request content:
> $ curl -XPOST 'http://127.0.0.1:8500/graphql' -F 'query={ cars { make, model, year, tco } }'

Or by going to http://127.0.0.1:8500/graphql/explorer and in the left side try this query:
```
{ cars { make, model, year, tco } }
```

```
{
  filter (field: "make", value: "Acura") {
    make, model
  }
}
```

You should receive a lot of cars with the specifics fields.

## GraphiQL extension
To run GraphiQL extension, just open `endpoint + /explorer` in your browser, for example `http://localhost:8000/graphql/explorer`.
