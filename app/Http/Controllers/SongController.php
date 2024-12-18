<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    function index()
    {
        $song = [
            [
                'id' => "1",
                'title' => "No 1 Party Anthem",
                'artist' => "Arctic Monkeys",
                'cover' => "data:image/jpeg;base64,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"
                ,'genres' => ['indie rock']
            ],
            [
                'id' => "2",
                'title' => "Strawberry Swing",
                'artist' => "Coldplay",
                'cover' => "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhMTExMVFhUVFxgYGBgYGBcXGhgYFRgXFxgYGhgYHSggGBolHRcYIjEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OFxAQFy0dHR0tLi0rLS0tLSstLS0tLS0tLS0tLSstLS0tLS0tLS0tLS0tLS0tLS0rLS0rLS0rKy0rK//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAAECBAUGBwj/xABBEAABAwIEAwUGBQEHAgcAAAABAAIRAyEEEjFBBVFhBhMicYEykbHB0fAHFEJSoeEVIzNykrLxYoIWFyRTVHOT/8QAGgEBAQEBAQEBAAAAAAAAAAAAAAECAwQFBv/EAC4RAQACAgAFAgMHBQAAAAAAAAABEQIDBBITITFBURRSwQUVMnGRoeEiM0Jhgf/aAAwDAQACEQMRAD8A4B7pUHKLhCi8z5ALi6Haeai8yTCiN0wCUJUmDclSASIskR9ygkxs8kzjaxv8VHMJ1Sc9QOXxv5pBxQ3DklKoKKgJ6KTSL/VRbTB1KZoieX3qgMWqbDzSyWSy2lJDvpXUmPNwIvzg6fBRFRRDhyUCsmL07mzooEc7bJQcGQrFC+qr5VYotMgq0D1GCZbOXadfVCqK4WiPvdUqrdvNZEWeaE03CfKlYI0sU+iIG6oFMqw5lgeaMoNdy+qi8wj0WxeFGtSBRQs4Tp+7KSlqliMPRbTJLqhJ9mwaC7cwb5RzssklFxOIL3FxtsBs1o0b5KDhey2yYNk3U8qZvlZSa5VCDUnU1M2Sc6yKjVAcbAMtFpiwub7lVixGebKDL7KIiAiGOSjkiVIFVUqad7CIMHSR1CMzEuFN9MRleWl1hMsJywdtdkDPOs8lBOi8EXRWkEFVyxOBCUIFSY7ona1ELP4QRY5FglQaxEBjYygQEIrXWj+UKyYuiFO4t1H+oQQZ81BteUUuGqioCkpso6Jd4EUv05dELMKaMSS1oOyiHIrQSgTWWUgxEIEJm2QQ7ronRZ6fyklK5hpRQLBVgdD6KTK0LbKw7RQDUWm8GEzggg63IpEyouaoAwiCQpZEmFEbCCBCgQiPIgmVVc9FHcoltwhKcwsiyxiOKaqsqaI9O/MCFRM0045Jy9CymyAp5BOGTqoAorXoBVKSr1gVcqPVeq6xEoAUhKNqbKFMKy1wmUsMxiM1qZgCM2mshBsboocITMpbJnW9P5RRAIUpVY11IPlBYzJIchOg5vG4U0yLhzXCWuGjgPg4bgoIutSphu4Y5tZwJewPbSAJc0n2Xl2jDG2pWZS5LaC03Roi03yq+im16C0SgPEqTHTadVKPWEAj0RcO7VCqH5KHeclBKs7ZCa1ODe4VilRn+iorCVM+KNijDDOgmENpUB6FMC5uR6ov5kG8qsAdQpu1MWFkBjWClnnySZgc8Fr2k8iY/ormH4RVmP7u3/WPiVidmMeXpx4TdlETGNwpMCPRF4n7CuN4NVJIBpT/APaz6o9PgNbkw9RUafgp1cPdfg9/ySoVKSrd0Vuf2LX/AEtDwf2OaUw7OVzdwbTGkuI+AUnbh7r8Fuma5WKKSkykt2p2XrBocyKg3y2j0OqLS7N1MmZ3gHN7SP8AhTrYe7X3fv8Ab92Fk5KzSKJW4HWmGAO5OabH3oNfDvotzVWOaNMzrCeQ5lajPHLxLlnwu3X+LGYSxuKbTYXnRoWFgO0TnVW/3Y1sJO6NjXiuzu2ktki5BAPITtKy8Dw9wqlrmEFjg182ykmPd1WriYlvDhs4nG+1vQ+NcJIw7MQIIzQ6NWg7O3N9+qwWFdPw/gz3tqU3eEBh8eaWsNiCQNZXL0iZiJOkC9/muWuXbjeGx15YxhPNfsnmTI35d/7fv3p11eTo7Pln9JYvG2nvnEHMDEOmQ5sASDysqTBchWuJOksP6TTblGwtDh/qBVPMtOIjmlRDvuE/fc58+aLWqNytgGRqT8uiAbH7ffopl8AKAsnJVAqmqelckCURzJVijQ0NoG3NSwSmwAaXU6ZyyRrBhTBEJgOUIM7DYqpPicSDy1Ctup2zDnf1R6OHa0zHv6o1WCLKWQptF+n9E9MTYi2hKmaTIdObNbLERreekckKrjWMETJ5DbzWgbKAL2AVPE8bcwxTJtaZt6DdUMZXL4zG3IbKq6naVmcYny668so8TTQwfFqoeHPeXDeeq6BuMJuI9LfBcg0q9wqoc+UkxB3tzXLPXE932OC43LGeSe9ujZjXDSR5KYx5IvPvPvVAv6oLqo5fwuHLD7PVmG23HAN3HQE3tGyu/wBoMc3L3r2iLjM73arlmmYAmfJEGHc79ZU5IajdM/42v4/jFRoDadRzgNJggeUrlq/evcXOcTeYJ/kBbVWhTbDbzFz15EGxUKpBbl325H0OnouuH9PiHj4jX1JvKapQwuIqN0JI3BuCPJetVRRpfla7sNmqVaTGVHhuY5wAIcBrItPReZcJa01GggkTHL+Suy4lwutQxGC/LPqijXqNDg51mOmTJ28Mn0XrjReuZy7W+Du+0sMd+OrGbiLv86a3Da9M4biT2OytaCYJIJadx+3lHRPi+EUKdLD1aDyG1QYmLwMwOmuq5jtNxTL3zHx3tRzWuY3VzBMm3OBqquJ4jVqUqdEnu6TNGAy7yLth0C8mvHLHK/T6PTlxOMThtx9e9e3j+XV94z97PeElxH5On+wfz9Ul7OpD0/fOPyKdINyBlUFrXXY4atnXzadxrZVsThXUyJi4lpFw4cwdwtSt3Lmhs1QBePBqYBMqNKrTa3IXuLJnI9gcATqQQ4EHyjVYh+fZEc0XuiB8lbxVKkXTSzZYB8Z0O4B3HJVqj9kAJlPT/hTDB9/JSaNEFipRp5GODwXHNmZljJGniNjKj+Z0BEgeivdnuDfma4pB5a0AvqPicjG6mNJ5IZx2HBLRhg6nJhxqPDy3QGRYE6xEKKA+sBEA9UJtYn1VzjuGpUzTNFxNOpSa8ZiC4OuHgxoQR8FnGkW3IIGxIInyJ1CsJK22pZGNcAAuIH3ssbEYzL7AJjUwYCoVsU51ytUjRxnECSQ2QP5VUX2VU1TurWApmo8NzBoP6nTAtN48kUqlaB1UmmGndDw5nYudyAJPuU6hym7SN7gg+4o3HYqQt6XUmF59gGemyH33Ie9RqY98WgBZmJ9HfVOF3lNfk2KVSplAdY+ik+qWtL3SQLWBi+nqs7gzH1DJccsgED5nYL0Ph/EcNQoVaVfK5jASP1AgicpOkzoNbrhljMS+pjxkTj2/dk8BqdxVp1HFmVwBzWjI/foW7rM7UcZoivU/LnM0mQRpMeKOYmb9Vm8P4U/EXzinTkxmIsCZgDddXwfsjgnGHVajnaS1zRHoAu2PCTOXM+bt+2YwqLqfEy4mpjK0SW5Qd9VbwVLvCBGY7Hf3r17gnZjBlr8K5gNQA1G1HRmc1p8TTsY8tCuKpcOZTcJaMjhDudNxNiDuNPRduHrnnCYqYfP47istmEZ45TOMhYTABlVguM2hmb7tM/NbnaPin+HSY4gMaYPJzrH1Df8Aeg4uqKIIqBtR5gM5mN3GIc1oi9josCrVc/VxMT5XMm3U/Jdt2zlioeHhtPPlzZR2N+Xaxzjq53tOcZcfMnVM6yZz04BK8T6ZJk3dlJBTKC5vkrj2Dl8FUqjkbQtoRdAQRKllF0MlQFa7n70i688lENnp8lEjkg7DsQR3XEo/xPy5y+V5HVci1uhU+G8ZdhXipTcA6CCPaDmnVrhuCliOKYR5zdxWZM/3bKrcknbMW5gJVoaPZh1IVnvqNFQ0aVSqGG7S9g8IPMSZjom4Dx6vi6v5bEvNWlWa8FroIY7KXB7P2kH4rCo8ac2q2q1rGhgyhjR4chmWnczJuUWnxWlSDzQpOZUeC0Oc8OFNrvaDBAvtJVoXPzlUcPLe8MCtkFwBkAMt5x0WPw2o5lWk5pI8bW5gCBciRe2mytUOK0hQbQdQzNzZie8IJcBAi3hCjiuN5jRa2kG0qN20w50FxMl7jqXGBdVF3GcQqNxlSmSHMNYsLCAQWudEQRbVXeGV6tNuLpU6hHduLWQQANRqdvosWvxtpqms2gwVC4ukuc8Bx3ymBbZBw3FC1tUGnmNUHOcxvJJmBoqNxnEZqYNpeDXa4iq9hF2k+FrnN9orC4vXe6tUzEkh7hczFzYFR4MHd6wspd4QRlbJAzE+G4+a6ur2fxFL/wBRUoUKMkmalUmC6bwJveylxcRM+Wu9TPpDn+z/AIXOrOLR3cBucgAvO3mGyUbF1jhMWHthzSRUi2VzXzIv6qjiqgcxtJrQSHlxcC45yRE5YVvFYarUbSDmZW02WJk+FzsoJ9RC6RhLnO3H1kbiGJY2tVdRfaq0OAH6S7XyIi3ms2vis3dsJljJtzcTdx5k81oUuDuBBBD/APLFvRyr8VwWWD6ERBn4KzqmJtdfEYZx0/WfV0fBa9INgh7Hc/aaekHT1BC6jAtZqMoJiYEC24G3kuJ4O/PTB3Fj6f0RsVxttA+0S7kDp58l6OaIi3ydmrLnnF19bjfdV2OLyYxDWzb2agyObbaHKn2jxzaWIByktqMDCwH2g2Q2BsRE5l51jOMvqPa79LXZg3rMyeq3OHF9WpVxNYkuLAWTbVwsBtAleLZ/e6sekU+hq1Vo6WXrNr9fFOJJOp9wGwH3fVAa7+VDNeVLvBGq55Zc03LvhhGMVCYhTahgp5UagWE6FmSUVQ76yHPMRyVzhmDa5lWrVc5tGllktALnPfORgmwmCSTsETEYfDmi6tSqVMzXMa6nUDZGfN4gW2LZhbtlmv5qOuigXiJKpVKj3dB97oLbazZibyLc+d0HH1nANhoAeCQdyAY+SDRwpJk6bxr6LouNcMoClhzSzHwEEkg7mR0OqvYceRJTlkLXODp7ogotgD7uljFyo7cA8jS3NbDHhpMRe0QJ6+iTao5xf3JYzG8LeeX0VqlwYEgTfdWMZiQwSTJOgWdV4m/bKL+aRY7JnZzC4XFUmuezFUzQfVqAey0lsAWOoJmbKjjuDYbDtp1m1n947LFMAQ0u0DifateE/YzEMqmuXnx5IsIAYBJd56iFk4nvsRXdULCW5py6hrbQLbxCuvC8ptudvJjER5u/99mtg8caVCoWFjzVeC9haBlykFrm5dBM2WnwfDnHF7sTVEtIIbcAg8hECI3XN4rHU6IAZBP7R13J+XVLB9q3UsxZTaXEAGSbRfQK5Ydpie8x4ly4nPq4456o5Zy/FH1/66qs2jQdUpsYAAeVzv7W6ze/cab2POgEX0BeHZfK0wsB/aKtVeXOygEjNlaLDmAd1ZqV8lJtV76hFVzu6a1rGyxhyuc4mYO0BejDbEYxfl8/4XZfeV3K1t3ED1AB6rN4vxKk5hY05nWggWEHmVW4zhmltGqx7n035h4y3Mx7dWGLC0Gd1nVajC1gDQ0gEOMk5zOsHSOizluvw9GnhYxmMpnvCdHH1WghjsoJkxrpGqr5feUanTJIaBc6LbwfDQy7oLvguE5PVUXfuq8P4To5+moHPz6LZLTHwThEBC5zNrAIaUR1ICOqk4jnKRZZBFmt4RWgXuoNYiNaoIZUkbI3qkiq3BOJuoZhUotq0awhzHyA7IfaadnAnXrC1eKcIwncjGYVz3UWVGNq0XGHNLrjXUE2WRgeJUjQNCs15h5cx7ILmSBmABsQYEhNXxVFtF1KiKp7xzC99QgWYZDWtFgJ3K2y0qXEWvw2Lqmhhw9j6WWKYs2o52be+yt9lMUK2IqNNGj4qL3RkBHeMZDXCfZ2ssvB4nDMw1akRWc+tkJIyBrTTJItqZlS7K8TpYao6rUDy4tLAGgR4hBJJMiLWQWeM4ctwlEVqbGV3VHFhY1ozU4ghxbbXQKn2cwr31Wuyh7aPiLXENm9mguO5v6FRw3EW/l3Yerncxrs9IiJYZvY7OGoCq161PuWsbnzZsz82XKdhG9hz5lBuYfDtwuP7qoAaFRwNw10Nq+wbzGUn+Ff4VgXj87h6op95/eNoTTYSajBnc4W0LS31KweI8ToVKNJjWVQ+kMoe5zTLZmCANtlN/aOocTQxMXohgj92UQ6f810FKpxJzMPSpAMzGarnFjC4SfA2SPX1XUsxD+9wRzUQyrRGem4MHeEzIDY9o7dYXI43Eh9R9RwDcziYGgGzR5CAr/Ee0WFPcFtOq51FjWgOc0NcWnMCconXkgj2bdUfT4i1rKYcy7G1AyWl1QgtJfyAj0WJx9j6RYx7aXeNDamam1oHjE5LWdB30Vihxxhbiu+D82KPjLA2GtzZvCDvPNZ+MxNAtDGMqETd7y3OGgWYwCzRJlaR2dLBgYfE18pAdUY12VosxrGzYay7WFi8J4t3uLpsa2KV2gfut7TuZ+qk/tm/MAxsUpa51N0eKGhpAcNAY95WZw3idGlie9a2p3YJIacpIJkRI2AKR7S1fsvY3CFuFeK7WZzVHcxlzBonPJboIixurWDwbsXhSymGDEUHZycrWl9ImNQP0G56LP4digG1g5rn4Z7xuA9rrlrmDTNz2Vns7xqlhn1Xlr3hzHMaBl9l2pJO/lZElk8VxTXuABlrBGeA3Of1OMDQ7dIW3wjitKjTOExuHNSk6HNP66ecAy3/p3tfz0WA2iHHwNcRO/LaYsV1NBmFqUqTcSKveUmZG1KeVwcASQ1zXaxNjKlhuJdnhhKuGxOHeKmFrAubmAdIbGdkEQZGhIlbmM4LSpcSzgM/KVmU3jM0Rlq2YAYtDjNv2rK4lj2vZSo0w5tGjmLA8guLnwXvdFh0A0CWN446ph6FDLHcz4tzclg0/TJWbWlhjHYJmKpkMLqlQsaSxstgy9zCRYZYb/3K1xiBg8G6Ghzg8uOUAuyuhsmOSzuP8XOKqB+UMhrWgAzcDxO8yUXiPE6T6FCi1lUdzNyWmQ/2rR7ksdEzCUcW12GIYzFBrX0HgBoqEsBdSdAidwocIwIr18K2uwRTw7qlRoaG5nU3P8AC6AP2gei5nF48Go2pR7xpaGwXESHMAAIy6aLXr9sKpxVHGCmwPZT7tzb5HzOe20yoA4btK+o9wq06bqTw4ZRSbNPM05MhaA7cC+wWM1p31Gq3uGcbwtCtUq0mYgd41zTSzMDWZtw8XOU6WWDnJMkyTqdySkkCBqPXwhZlmIe0PbBBsZAmNDbQquQpNCipQEkr806DmKTOiM0KbaeiLlG63bIBEJwrHcjZQNMg6JYFln5BT7nmnFMorUAe7hAxGJa236j93VshYOLJc9zhzSA9R5NyblBcyPv+FEvupNutBgeimAE+SAhBpBQGe2yAQrFNjjoFcZwkm7rSlihhmOcYaFrYbAxd/uVujQawQAFMO3WZlSiOgT96Ao1HE7LreA/h3iq7Q92WiwgFueS507hguB5rI5qgM2tvmoCnraIXTdo+wmKwgLzlq0xcvZMtHNzdQPesSnp5hBV9E4KsuoWUfy+4RAwFMaQiGiiMp7wiq7WwVKOiudxpshOpkKKE06SisI3TBWcQ5pMsZkbA8M5rgCTJvc3QCgpJ+780kHo/HeweFxN6Y7h+uZgEHoWaR1F1yNT8MMXtUok8iSJ6Ar0vDNOUuBJOk9NYVp7tCB/ULbLwZvBq4xH5bund+DGS08wZ5RutDifZnE0BnrUXNFhmkOAnSSNF7J3DO9FY0x3gbkDtTlN4nkrFdjKtN9OoJY8EEDkbE+f0UV891KQ2F5QXjKYV6pTyVHMMgtc4DMIkNcRmHPRCxlMSgoYt0ggeSqUeH8yIV4sATuA5XWkZxwLQdykcA3aQrz/AETMagrU8GzqrFPAsd0hHyQi02bhZsCFMM02T03clKop0aMqCLBuU7wDouw7Idivzn9495ZRBygNjNUcNQDsBpPNdZi/w2wbmRT7ym4H28xd6lpEHysiuL/DrgoxOLbnE06Te8cOZHsN99/Re19yfCQ6w1ETYcuq5PsJ2adgxXFUtLnvGVzTqxot5Ek6LqKWIaATFgY8ua1CSNWu27SWuBBH1Xn2I/DZrqr3Uqwp0nXa3LmIJuWzOi9CdB9kmBY3QO6aTB9NRHuSkeS8d7FYmhBaO+a52UFoIIJ0zNOg66K7w78O6z2h1Wqxk3DWjOfU+yF6fUwzSLgnpJNuZGibCthsGQJsDp0j1UpbcTT/AA1oxetWBjkzU9FQxn4c1miaFVtUD9LvA70Isf4XpmUC876IdCqJIkTPOfJWoLeGYmg+k4sqMLHDUOEH05jyQSJNl7rxfhFDFMNOqwO5Ee0082nYryLtL2fqYOplJLqbpyVOcfpdycP5UmKWJthVGffyUWGyNUiNVGBaCop7p0PL9ykoPWsC7K8tAiDptfcdFo0mxYiBp6a/RLDtAk77W2+7q2C0XFzrp97rbKg5+VxB1t7lZoujrfTb7lRq0iT8TKk9kbknpt6orB4n2Qp1mltR1Tu2lzw2WNykkuIBAzak+9YmL/DzCub4X1mRvmDrRINxouxBdExckSNrclWa6XWZca3t9JQeZ8Q/D/EU295Sc2sBq2MrojUbO9FyTmRY68tIK+iBoDYfALj+2fZBtVrsRh2gV2AlwygisIk2Ns/IojyMtHNQDhNld/tWsNKjh0sIjaIsjs4tWj2g4cnMa4fyEFBtXok2t9yrhxjD/i0GnrTPdu01tYn0Vvs3wNmKxVKmx5NMlzngiHtYzUOi3i0BHNQX+y/ZKvjBmHgpf+47f/KN/NegcP8Aw8wTWZXuqvfzzZfOALBdFTa1jMoaAAA0ARAA0AjkjN2I958reSUFh6bKTWUqTQ1lNsNjaOfXcq054IzaTqNxChReBOtz8dE7xAIJsTsLmyoBVOhE8508ySk5sGTOXfSD80aqTAEAs32IJ5oDwBY6CxnltqgZtRs+Fxk7XvGxCc4oxFpO2kT1TMAAJHx1Uq9FrgDaRz3P/CCTMVls4xN5HXqd0Wo3OBB9earZWuDdJG3P6ItBk2kRYC5nqiJUmuFsxMj06+qK4m2WG3EkCZ/qjURFifIkIbqJLpnoBseRhULvomYBOnXmgcQwNLEU3UagkO3Gx1Dmk7hHZRjU3+u3kpEjUWi330QeGdoOHVMLWNGpqLtdFnsmzh9OcqhmEL138RuCCvhDUEd5QBe07lv62+RF/MBcb2K7GHFjvqpLKGjYs55Gt9m9Viu7VuPk8/5SXsP/AJd8P/Y7/wDR6StJzNRrREDzCLVNmxAA15kKn3pa2SPKDqFFlaZvYfPT0VVd7yZAj3e5DY4jSAee07qjVqyQL3jpEaXRm1uQzRrLgEFtlOQLWGnJCfR106HbmqrcU8e0wkGwE2Gxi1wnblLp0jSZ9CAiC1XgkjSNDbdEaDBh0aRKFGbly6z9hKnSsABcz5/0Qef9r+xlI13VhWbRZUBdLoDBUAlwJ2zXI6yuFr0O7OUyRs8B2Vw5tJFwvdqkEZS0QdJAN/XUqvxXgzMRSNJ4Dm84u3qDsg8KpAuIa1pcSYAAkk+W69D/AAiwpbWxWdha8NYLtykAlx35kD3LP7OcAfhOMU6T/EAyo+m/9zcsZvMSQfNepd0LkC8CTFzGl9/JASnREmxsbjqdwpUjJPJpi+9rR6qDXyA42MROkjkeqPWHhEbjzsgK5kA62vY/d0Om+SJ32KK0y21jCg7VokSb3++iAg9kg3n0VYYbxxoI0nWPPYI1fD5iDldIMgyALb66HkoOpPIgnLFxBugAzDxcGxNojRFpyIkWOt7x80akSIEg9Y5DQhWCWkRaCgrmm3YWnTf0KDUqxUF7bCNxqrFZkRFmxci2m3rzQqjGzpYXB9NkQV0uINg2JvE32hFpERa3TyVZlcNiQR0jfkEzspdcP32gX2jRUHqVJI/jp5pCffr56Ji2AADc6za3KVN7sscyZhAqtHM1zXCxBaR5jqsXsRjKbsDhwC0FjcpBcJGQkE69P5W6w763J92yoYnhVA64ekZ2yCb66BQact5j3hJc9/4VwX/xmf6nfVJAF9SG7kxZu87jyQ6RIs4+1cxED6dPNTrADxaWBHPqqtKoS6TB0F9COgRVxjW5pJdJgRqAAP4VllTKJDdb6eiE6tYxAGsSPJV/zMy4Xj/gwgO68uJFzMbJqVTNtJJ9FUFUWaW2No8/ij0HQIIgbfBBZa60XEGLa89eahnJ1tJ0H8Jd6AYm2v8ApF0wDbm4JPogGGuN3WExyOqd85srLDXz2+at4dgII5xBO5Unt5DTQ9Ry6aoKxwtMua8tBdTJyuEyMwhw+qvgztYnbnsqz3T4jYnQ/H1Rqbj6/dhzRUqgcPPYa+dkVrTl020P3ZM2qfIHrptcqVJo89LhED/MQIc0ieV4+qm0yPYNo1B2tHuKM3DyL6DbyKeo6OvTl59EFU4gkjwQJiST5wBuU/8AeTeALX5/IKy9gI+I6dOqgAL29DughTaIidJ95Sc+BIBNwJOvohflX5gWmPlzB2KsuBDvagawBf3oE93sTIN7G6jnGsevTy2TMaQSQQZO/LcdFLFYcPa4SfFy+uyIk9zI15dYUm5TaRzIjdCrUNhrbzAVephzZwnNe8wPVUHq0vFZxB1jY+UqbZHtQeR5/RApvddrzPoRtP35I9LeTI/TMSgIWEbgA/z9ER3PogF0DzuN9NlYY0aoB5Tz+CSfJ9/ZSQYON/w1n1dKf+b5JJKKJV/wwj8P09EkkgTqe2PL5JY7T/uHzSSRVen7L/8AI/8A2hWKmg8h/tSSRFnA+wPIqy72R5fRMkgot0Hr81Zpe0fJqSSipVdPerVDX0CSSqSI39SHV9lJJEhPC6jyRTr6pJKKINSqW9T73TpKidHT1KMzQeqSSIDsPvdVqftu8nfJJJUEpewPvmqzfbb/AJykkoq0P1/fJX6eySSqSSSSSqP/2Q=="
                ,'genres' => ['alternative rock', 'pop']
            ],
            [
                'id' => "3",
                'title' => "Symphonia IX",
                'artist' => "Current Joys",
                'cover' => "data:image/jpeg;base64,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"
                ,'genres' => ['indie rock', 'new wave']
            ],
            [
                'id' => "4",
                'title' => "Ma Meilleure Ennemie",
                'artist' => "Stromae, Pomme",
                'cover' => "data:image/jpeg;base64,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"
                ,'genres' => ['EDM']
            ],
            [   'id' => "5",
                'title' => "Chicken Dinner",
                'artist' => "Okaywill",
                'cover' => "data:image/jpeg;base64,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"
                ,'genres' => ['indie']
            ]
        ];
        return view('songs.index', ['songs' => $song]);
    }
}
