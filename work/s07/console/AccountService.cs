using System;
using System.IO;
using System.Text.Json;
using System.Text.Json.Serialization;
using System.Collections.Generic;
using System.Linq;

namespace s07
{


    public class AccountService
    {
        static void printMenu()
        {
            String menu = "1. List accounts\n" +
                            "2. View account by id\n" +
                            "3. Exit";
            Console.WriteLine(menu);
        }

        public static Account[] readData()
        {

            String file = "../data/account.json";

            using (StreamReader r = new StreamReader(file))
            {
                string data = r.ReadToEnd();

                var json = JsonSerializer.Deserialize<Account[]>(
                    data,
                    new JsonSerializerOptions
                    {
                        PropertyNameCaseInsensitive = true
                    }
                );

                return json;
            }
        }

        public static void viewAccounts(IEnumerable<Account> accounts)
        {

            Console.WriteLine("\n+---------- View Accounts -----------+");
            Console.WriteLine("| Number | Balance |  Label  | Owner |");
            Console.WriteLine("|------------------------------------|");

            foreach (Account account in accounts)
            {
                Console.WriteLine(account.ToString());
            }
            Console.WriteLine("+------------------------------------+");

        }

        public static void viewAccountById(IEnumerable<Account> accounts)
        {

            if (accounts == null)
            {
                Console.WriteLine("You have to view all accounts first.");
                return;
            }

            Console.Write("Enter the account number to view >> ");
            var accountNumber = Console.ReadLine();
            Console.WriteLine("\n+----------- View Account -----------+");
            Console.WriteLine("| Number | Balance |  Label  | Owner |");
            Console.WriteLine("|------------------------------------|");

            foreach (Account account in accounts)
            {
                if (accountNumber == account.Number.ToString())
                {
                    Console.WriteLine(account);
                    break;
                }
            }
            Console.WriteLine("+------------------------------------+");
        }
    }


    public class Account
    {
        public int Number { get; set; }
        public int Balance { get; set; }
        public string Label { get; set; }
        public int Owner { get; set; }

        public override string ToString()
        {
            return JsonSerializer.Serialize<Account>(this);
        }


        public bool isTheSame(Account obj)
        {
            if (this.Number == obj.Number)
            {
                return true;
            }
            return false;
        }
    }

}